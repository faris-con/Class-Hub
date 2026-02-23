document.addEventListener('DOMContentLoaded', () => {
    const coursesGrid = document.getElementById('coursesGrid');
    const courseSearch = document.getElementById('courseSearch');
    const courseModal = document.getElementById('courseModal');
    const closeModalBtn = document.querySelector('.close-modal');
    const viewScheduleBtn = document.getElementById('viewScheduleBtn');
    const selectedCountSpan = document.getElementById('selectedCount');
    const scheduleView = document.getElementById('schedule-view');
    const courseSelectionView = document.getElementById('course-selection');
    const backToSelectionBtn = document.getElementById('backToSelectionBtn');
    const scheduleTableContainer = document.getElementById('scheduleTableContainer');
    const printScheduleBtn = document.getElementById('printScheduleBtn');

    // Navbar Dropdown Logic
    const dropdown = document.querySelector('.dropdown');
    if (dropdown) {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        if (toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            });
        }

        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('active');
            }
        });
    }

    // State
    let selectedCourses = {}; // format: { courseCode: { course: obj, group: 'A', sub: '1-3' } }
    let currentCourse = null;
    let currentGroup = null;
    let currentSubgroup = null;

    // Initialize
    if (typeof scheduleData !== 'undefined') {
        renderCourses('');
    } else {
        coursesGrid.innerHTML = '<div style="color:red; text-align:center; grid-column:1/-1;">Error: Course data not loaded. Please checking create_schedule_data.js file.</div>';
    }

    // Search Handler
    courseSearch.addEventListener('input', (e) => {
        renderCourses(e.target.value.trim().toLowerCase());
    });

    // Render Courses Grid
    function renderCourses(filter) {
        coursesGrid.innerHTML = '';
        const filtered = scheduleData.filter(c => 
            c.name.toLowerCase().includes(filter) || c.code.toLowerCase().includes(filter)
        );

        if (filtered.length === 0) {
            coursesGrid.innerHTML = '<div style="color:white; text-align:center; grid-column:1/-1;">No courses found.</div>';
            return;
        }

        filtered.forEach(course => {
            const isSelected = selectedCourses[course.code];
            const card = document.createElement('div');
            card.className = `scheduler-card ${isSelected ? 'selected' : ''}`;
            card.onclick = () => openModal(course);

            card.innerHTML = `
                <span class="card-code">${course.code}</span>
                <h3 class="card-title">${course.name}</h3>
                <span class="card-level">Level ${course.level}</span>
                ${isSelected ? '<div style="margin-top:10px; font-size:0.8rem; color:#10b981;">Selected: Group ' + isSelected.group + (isSelected.sub ? ' / ' + isSelected.sub : '') + '</div>' : ''}
            `;
            coursesGrid.appendChild(card);
        });
    }

    // Modal Logic
    function openModal(course) {
        currentCourse = course;
        currentGroup = null;
        currentSubgroup = null;
        
        document.getElementById('modalCourseTitle').textContent = course.name;
        document.getElementById('modalCourseCode').textContent = course.code;
        
        document.getElementById('groupOptions').innerHTML = '';
        document.getElementById('subgroupOptions').innerHTML = '';
        document.getElementById('subgroupSelectionStep').classList.add('hidden');
        document.getElementById('confirmSelectionBtn').classList.add('disabled');

        // Populate Groups (Unique Groups from Lectures)
        // Ensure lectures exist
        if (!course.lectures || course.lectures.length === 0) {
             document.getElementById('groupOptions').innerHTML = 'No lectures data available.';
             return;
        }

        const groups = [...new Set(course.lectures.map(l => l.group))].sort();
        groups.forEach(g => {
            const btn = document.createElement('div');
            btn.className = 'option-btn';
            btn.textContent = `Group ${g}`;
            btn.onclick = () => selectGroup(g, btn);
            document.getElementById('groupOptions').appendChild(btn);
        });

        courseModal.classList.add('active');
    }

    function selectGroup(group, btnElement) {
        currentGroup = group;
        // Highlight logic
        document.querySelectorAll('#groupOptions .option-btn').forEach(b => b.classList.remove('selected'));
        btnElement.classList.add('selected');

        // Check if labs/sections exist for this group
        const hasLabs = currentCourse.labs && currentCourse.labs.some(l => l.group === group);
        const hasSecs = currentCourse.sections && currentCourse.sections.some(s => s.group === group);

        if (hasLabs || hasSecs) {
            document.getElementById('subgroupSelectionStep').classList.remove('hidden');
            renderSubgroups(group);
            document.getElementById('confirmSelectionBtn').classList.add('disabled');
        } else {
            document.getElementById('subgroupSelectionStep').classList.add('hidden');
            document.getElementById('confirmSelectionBtn').classList.remove('disabled');
        }
    }

    function renderSubgroups(group) {
        const container = document.getElementById('subgroupOptions');
        container.innerHTML = '';
        
        const labs = currentCourse.labs ? currentCourse.labs.filter(l => l.group === group) : [];
        const secs = currentCourse.sections ? currentCourse.sections.filter(s => s.group === group) : [];

        // Combine unique subgroup identifiers
        const uniqueSubs = [...new Set([...labs.map(l => l.sub), ...secs.map(s => s.sub)])].sort();

        // If no subs found but labs exist (unlikely with our logic, but safety check)
        if (uniqueSubs.length === 0) {
            container.innerHTML = '<div style="color:rgba(255,255,255,0.5);">No specific subgroups found.</div>';
            document.getElementById('confirmSelectionBtn').classList.remove('disabled');
            return;
        }

        uniqueSubs.forEach(sub => {
            const btn = document.createElement('div');
            btn.className = 'option-btn';
            btn.textContent = sub;
            btn.onclick = () => {
                currentSubgroup = sub;
                document.querySelectorAll('#subgroupOptions .option-btn').forEach(b => b.classList.remove('selected'));
                btn.classList.add('selected');
                document.getElementById('confirmSelectionBtn').classList.remove('disabled');
            };
            container.appendChild(btn);
        });
    }

    // Modal Actions
    document.getElementById('confirmSelectionBtn').addEventListener('click', () => {
        if (!currentCourse || !currentGroup) return;
        
        selectedCourses[currentCourse.code] = {
            course: currentCourse,
            group: currentGroup,
            sub: currentSubgroup
        };

        updateUI();
        closeModal();
    });

    closeModalBtn.addEventListener('click', closeModal);
    window.addEventListener('click', (e) => {
        if (e.target === courseModal) closeModal();
    });

    function closeModal() {
        courseModal.classList.remove('active');
    }

    function updateUI() {
        const count = Object.keys(selectedCourses).length;
        selectedCountSpan.textContent = count;
        
        if (count > 0) {
            viewScheduleBtn.classList.remove('hidden');
        } else {
            viewScheduleBtn.classList.add('hidden');
        }
        
        // Re-render to show selected state
        renderCourses(courseSearch.value.trim().toLowerCase());
    }

    // View Switching
    viewScheduleBtn.addEventListener('click', () => {
        try {
            generateScheduleTable();
            // Switch Views directly without timeout complexity
            courseSelectionView.classList.remove('active');
            courseSelectionView.classList.add('hidden');
            courseSelectionView.style.display = 'none';

            scheduleView.classList.remove('hidden');
            scheduleView.classList.add('active');
            scheduleView.style.display = 'block';
        } catch (err) {
            alert('Error creating schedule: ' + err.message);
            console.error(err);
        }
    });

    backToSelectionBtn.addEventListener('click', () => {
        scheduleView.style.display = 'none';
        scheduleView.classList.remove('active');
        scheduleView.classList.add('hidden');

        courseSelectionView.style.display = 'block';
        courseSelectionView.classList.remove('hidden');
        courseSelectionView.classList.add('active');
    });

    printScheduleBtn.addEventListener('click', () => {
        window.print();
    });

    // Schedule Generation
    function generateScheduleTable() {
        // Define Time Slots (Internal Logic uses 24h)
        const timeSlots = [
            "09:00-10:40",
            "10:40-12:20",
            "12:40-14:20",
            "14:20-16:00"
        ];
        const days = ["Sat", "Sun", "Mon", "Tue", "Wed", "Thu"];

        let html = '<table class="schedule-table" style="color: white !important;"><thead><tr><th style="color:white !important;">Day / Time</th>';
        timeSlots.forEach(slot => {
            html += `<th style="color:white !important;">${formatTimeRange12h(slot)}</th>`;
        });
        html += '</tr></thead><tbody>';

        let hasCourses = false;

        days.forEach(day => {
            html += `<tr><td class="time-slot" style="color: #a5b4fc !important;">${day}</td>`;
            timeSlots.forEach(slot => {
                let cellContent = '';
                
                Object.values(selectedCourses).forEach(sel => {
                    const c = sel.course;
                    const g = sel.group;
                    const s = sel.sub;

                        c.lectures.forEach(lec => {
                            if (lec.group === g && lec.day === day && checkTimeMatch(lec.time, slot)) {
                                cellContent += renderCell((c.shortName || c.name), lec.room, 'lec', lec.time);
                                hasCourses = true;
                            }
                        });


                    // Check Labs
                    if (c.labs) {
                        c.labs.forEach(lab => {
                            if (lab.group === g && (!lab.sub || (s && isSubMatch(lab.sub, s))) && lab.day === day && checkTimeMatch(lab.time, slot)) {
                                cellContent += renderCell((c.shortName || c.name), lab.room, 'lab', lab.time);
                                hasCourses = true;
                            }
                        });
                    }

                    // Check Sections
                    if (c.sections) {
                        c.sections.forEach(sec => {
                             if (sec.group === g && (!sec.sub || (s && isSubMatch(sec.sub, s))) && sec.day === day && checkTimeMatch(sec.time, slot)) {
                                cellContent += renderCell((c.shortName || c.name), sec.room, 'sec', sec.time);
                                hasCourses = true;
                            }
                        });
                    }
                });

                html += `<td style="color:white !important;">${cellContent}</td>`;
            });
            html += '</tr>';
        });

        html += '</tbody></table>';
        
        scheduleTableContainer.innerHTML = html;
        scheduleTableContainer.style.display = 'block';
    }

    function checkTimeMatch(courseTime, slotTime) {
        if (!courseTime || !slotTime) return false;
        const c = parseTimeRange(courseTime);
        const s = parseTimeRange(slotTime);
        if (!c || !s) return false;
        return c.start < s.end && s.start < c.end;
    }

    function parseTimeRange(tStr) {
        try {
            const parts = tStr.replace(/\s/g, '').split('-');
            if (parts.length !== 2) return null;
            return { start: toMinutes(parts[0]), end: toMinutes(parts[1]) };
        } catch (e) { return null; }
    }

    function toMinutes(timeStr) {
        const parts = timeStr.split(':');
        let h = parseInt(parts[0], 10);
        const m = parseInt(parts[1], 10);
        return h * 60 + m;
    }

    function isSubMatch(labSubRange, selectedSub) {
        if (!labSubRange || !selectedSub) return true;
        return labSubRange === selectedSub;
    }

    function formatTimeRange12h(rangeStr) {
        if (!rangeStr) return '';
        const parts = rangeStr.replace(/\s/g, '').split('-');
        if (parts.length !== 2) return rangeStr;
        return `${formatTime12h(parts[0])}-${formatTime12h(parts[1])}`;
    }

    function formatTime12h(timeStr) {
        if (!timeStr) return '';
        const parts = timeStr.trim().split(':');
        let h = parseInt(parts[0], 10);
        let m = parts[1];
        if (h > 12) h -= 12;
        if (h === 0) h = 12; 
        if (!m || m.length < 2) m = '00';
        return `${h}:${m}`;
    }

    function renderCell(title, room, type = '', time = '') {
        const displayTime = time ? formatTimeRange12h(time) : '';
        const timeHtml = displayTime ? `<span class="cell-time" style="font-size:0.8rem; opacity:0.9; display:block; margin:2px 0;">🕒 ${displayTime}</span>` : '';
        
        let typeLabel = '';
        if (type === 'lec') typeLabel = ' Lec';
        else if (type === 'lab') typeLabel = ' Lab'; 
        else if (type === 'sec') typeLabel = ' Sec';

        return `<div class="course-cell ${type}"><strong>${title}${typeLabel}</strong>${timeHtml}<span class="cell-info">📍 ${room}</span></div>`;
    }

    // Initialize Download Button
    const downloadBtn = document.getElementById('downloadImageBtn');
    if (downloadBtn) {
        // Clone to clear listeners
        const newBtn = downloadBtn.cloneNode(true);
        downloadBtn.parentNode.replaceChild(newBtn, downloadBtn);
        
        newBtn.addEventListener('click', () => {
            if (typeof html2canvas === 'undefined') {
                alert("Image library loading... please wait.");
                return;
            }

            const original = document.getElementById('scheduleTableContainer');
            
            // Create a clone to render full size off-screen
            const clone = original.cloneNode(true);
            
            // Apply styles to ensure full visibility
            Object.assign(clone.style, {
                position: 'absolute',
                left: '-9999px',
                top: '0',
                width: '1200px', // Force desktop width
                maxWidth: 'none',
                height: 'auto',
                overflow: 'visible',
                background: 'rgba(0, 0, 0, 0.8)', // Dark background for the image
                borderRadius: '0', // Reset border radius for clean edges
                padding: '20px'
            });

            // Append to body
            document.body.appendChild(clone);

            // Wait a moment for rendering (though usually sync is fine)
            html2canvas(clone, { 
                backgroundColor: "#1e1e2f", 
                scale: 2, // High resolution
                windowWidth: 1400,
                useCORS: true
            }).then(canvas => {
                const link = document.createElement('a');
                link.download = 'My_Schedule.png';
                link.href = canvas.toDataURL("image/png");
                link.click();
                
                // Cleanup
                document.body.removeChild(clone);
            }).catch(e => {
                console.error("Image generation failed:", e);
                alert("Error creating image. Please try again.");
                if (document.body.contains(clone)) document.body.removeChild(clone);
            });
        });
    }
});
