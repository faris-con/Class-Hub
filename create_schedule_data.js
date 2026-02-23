const scheduleData = [
    // --- Level 1 ---
    {
        code: "HM101",
        name: "English 1",
        shortName: "English 1",
        level: 1,
        lectures: [
            { group: "A", day: "Sat", time: "09:30-10:40", room: "Hall 3" },
            { group: "B", day: "Sat", time: "10:40-12:20", room: "Hall 1" }
        ]
    },
    {
        code: "CS101",
        name: "Intro to CS",
        shortName: "CS Intro",
        level: 1,
        lectures: [
            { group: "A", day: "Sat", time: "10:40-12:20", room: "Hall 2" },
            { group: "B", day: "Mon", time: "09:00-10:40", room: "Hall 1" }
        ],
        labs: [
            { group: "A", sub: "1-3", day: "Mon", time: "09:00-10:40", room: "Lab 2-4" },
            { group: "A", sub: "4-6", day: "Tue", time: "12:40-14:20", room: "Lab 2-4" },
            { group: "B", sub: "1-3", day: "Tue", time: "14:20-16:00", room: "Lab 2-4" },
            { group: "B", sub: "4-6", day: "Sun", time: "14:20-16:00", room: "Lab 2-4" }
        ]
    },
    {
        code: "CS102",
        name: "Fund. of Programming",
        shortName: "Prog Fund",
        level: 1,
        lectures: [
            { group: "A", day: "Sat", time: "12:40-14:20", room: "Hall 2" },
            { group: "B", day: "Sat", time: "09:00-10:40", room: "Hall 2" }
        ],
        labs: [
            { group: "A", sub: "1-3", day: "Mon", time: "10:40-12:20", room: "Lab 5-7" },
            { group: "A", sub: "4-6", day: "Mon", time: "09:00-10:40", room: "Lab 5-7" },
            { group: "B", sub: "1-3", day: "Tue", time: "09:00-10:40", room: "Lab 7-9" },
            { group: "B", sub: "4-6", day: "Sat", time: "12:40-14:20", room: "Lab 2-4" }
        ]
    },
    {
        code: "BS101",
        name: "Mathematics 1",
        shortName: "Math 1",
        level: 1,
        lectures: [
            { group: "A", day: "Sun", time: "09:00-10:40", room: "Hall 1D" },
            { group: "B", day: "Tue", time: "12:40-14:20", room: "Hall 3D" }
        ],
        sections: [
            { group: "A", sub: "1-3", day: "Tue", time: "12:40-14:20", room: "CR 1-3" },
            { group: "A", sub: "4-6", day: "Tue", time: "14:20-16:00", room: "CR 1-3" },
            { group: "B", sub: "1-3", day: "Sat", time: "12:40-14:20", room: "CR 1-3" },
            { group: "B", sub: "4-6", day: "Tue", time: "09:00-10:40", room: "CR 1-3" }
        ]
    },
    {
        code: "BS102",
        name: "Intro. to Physics",
        shortName: "Physics 1",
        level: 1,
        lectures: [
            { group: "A", day: "Sun", time: "10:40-12:20", room: "Hall 1D" },
            { group: "B", day: "Tue", time: "10:40-12:20", room: "Hall 5" }
        ],
        labs: [
            { group: "A", sub: "1-3", day: "Tue", time: "09:00-10:40", room: "PLab 1-3" },
            { group: "A", sub: "4-6", day: "Tue", time: "10:40-12:20", room: "PLab 1-3" },
            { group: "B", sub: "1-3", day: "Sun", time: "14:20-16:00", room: "PLab 1-3" },
            { group: "B", sub: "4-6", day: "Tue", time: "14:20-16:00", room: "PLab 1-3" }
        ]
    },
    {
        code: "HM102",
        name: "Inno., Interp.",
        shortName: "Innovation",
        level: 1,
        lectures: [
            { group: "B", day: "Tue", time: "10:40-12:20", room: "Hall 4" }
        ]
    },

    // --- Level 2 ---
    {
        code: "IS101",
        name: "Introduction to IS",
        shortName: "IS",
        level: 2,
        lectures: [
            { group: "A", day: "Sat", time: "09:00-10:40", room: "Hall 1" },
            { group: "B", day: "Sat", time: "14:20-16:00", room: "Hall 1" },
            { group: "C", day: "Mon", time: "10:40-12:20", room: "Hall 2" },
            { group: "D", day: "Mon", time: "09:00-10:40", room: "Hall 2" }
        ],
        labs: [
            { group: "A", sub: "1-6", day: "Tue", time: "10:40-12:20", room: "Lab 5-10" },
            { group: "B", sub: "1-6", day: "Mon", time: "14:20-16:00", room: "Lab 5-10" },
            { group: "C", sub: "1-6", day: "Sun", time: "10:40-12:20", room: "Lab 5-10" },
            { group: "D", sub: "1-6", day: "Sun", time: "09:00-10:40", room: "Lab 5-10" }
        ]
    },
    {
        code: "CS103",
        name: "OOP",
        shortName: "OOP",
        level: 2,
        lectures: [
            { group: "A", day: "Sun", time: "14:20-16:00", room: "Hall 1" },
            { group: "B", day: "Sun", time: "10:40-12:20", room: "Hall 1" },
            { group: "C", day: "Sun", time: "09:00-10:40", room: "Hall 1" },
            { group: "D", day: "Sun", time: "12:40-14:20", room: "Hall 1" }
        ],
        labs: [
            { group: "A", sub: "1-6", day: "Sat", time: "14:20-16:00", room: "Lab 2-7" },
            { group: "B", sub: "1-6", day: "Sat", time: "09:00-10:40", room: "Lab 2-7" },
            { group: "C", sub: "1-6", day: "Sun", time: "12:40-14:20", room: "Lab 2-7" },
            { group: "D", sub: "1-6", day: "Sat", time: "10:40-12:20", room: "Lab 2-7" }
        ]
    },
    {
        code: "BS103",
        name: "Adv. Physics",
        shortName: "Physics 2",
        level: 2,
        lectures: [
            { group: "A", day: "Mon", time: "10:40-12:20", room: "Hall 3D" },
            { group: "B", day: "Mon", time: "09:00-10:40", room: "Hall 3D" },
            { group: "C", day: "Sun", time: "14:20-16:00", room: "Hall 1D" },
            { group: "D", day: "Mon", time: "14:20-16:00", room: "Hall 2" }
        ],
        labs: [
            { group: "A", sub: "1-3", day: "Sun", time: "10:40-12:20", room: "PLab 1-3" },
            { group: "A", sub: "4-6", day: "Sun", time: "12:40-14:20", room: "PLab 1-3" },
            { group: "B", sub: "1-3", day: "Sat", time: "10:40-12:20", room: "PLab 1-3" },
            { group: "B", sub: "4-6", day: "Sun", time: "09:00-10:40", room: "PLab 1-3" },
            { group: "C", sub: "1-3", day: "Sat", time: "09:00-10:40", room: "PLab 1-3" },
            { group: "C", sub: "4-5", day: "Mon", time: "09:00-10:40", room: "PLab 1-2" },
            { group: "C", sub: "6", day: "Sat", time: "14:20-16:00", room: "PLab 1" },
            { group: "D", sub: "1-2", day: "Sat", time: "14:20-16:00", room: "PLab 1-2" },
            { group: "D", sub: "3", day: "Mon", time: "12:40-14:20", room: "PLab 1" },
            { group: "D", sub: "4-6", day: "Tue", time: "12:40-14:20", room: "PLab 1-3" }
        ]
    },
    {
        code: "BS104",
        name: "Discrete Math",
        shortName: "Discrete",
        level: 2,
        lectures: [
            { group: "A", day: "Mon", time: "12:40-14:20", room: "Hall 3" },
            { group: "B", day: "Mon", time: "10:40-12:20", room: "Hall 3" },
            { group: "C", day: "Sat", time: "10:40-12:20", room: "Hall 3D" },
            { group: "D", day: "Sat", time: "12:40-14:20", room: "Hall 3D" }
        ],
        sections: [
            { group: "A", sub: "1-2", day: "Sun", time: "12:40-14:20", room: "CR 1-2" },
            { group: "A", sub: "3", day: "Mon", time: "14:20-16:00", room: "CR 7" },
            { group: "A", sub: "4-6", day: "Sun", time: "09:00-10:40", room: "CR 1-3" },
            { group: "B", sub: "1-5", day: "Mon", time: "12:40-14:20", room: "CR 1-5" },
            { group: "B", sub: "6", day: "Sun", time: "12:40-14:20", room: "CR 6" },
            { group: "C", sub: "1-4", day: "Mon", time: "14:20-16:00", room: "CR 1,3-5" },
            { group: "C", sub: "5-6", day: "Tue", time: "09:00-10:40", room: "CR 4-5" },
            { group: "D", sub: "1-5", day: "Sun", time: "10:40-12:20", room: "CR 1-5" },
            { group: "D", sub: "6", day: "Sun", time: "14:20-16:00", room: "CR 6" }
        ]
    },
    {
        code: "HM103",
        name: "English 2",
        shortName: "English 2",
        level: 2,
        lectures: [
            { group: "A", day: "Sat", time: "12:40-14:20", room: "Hall 1" },
            { group: "B", day: "Tue", time: "12:40-14:20", room: "Hall 2" },
            { group: "C", day: "Tue", time: "10:40-12:20", room: "Hall 2" },
            { group: "D", day: "Tue", time: "14:20-16:00", room: "Hall 2" }
        ]
    },
    {
        code: "HM104",
        name: "Fund. of Economics",
        shortName: "Economics",
        level: 2,
        lectures: [
            { group: "A", day: "Sat", time: "10:40-12:20", room: "Hall 3" },
            { group: "B", day: "Sat", time: "12:40-14:20", room: "Hall 3" },
            { group: "C", day: "Mon", time: "12:40-14:20", room: "Hall 3D" },
            { group: "D", day: "Mon", time: "10:40-12:20", room: "Hall 1" }
        ]
    },

    // --- Level 3 ---
    {
        code: "BS201",
        name: "Mathematics 2",
        shortName: "Math 2",
        level: 3,
        lectures: [
            { group: "A", day: "Sun", time: "09:00-10:40", room: "Hall 3" }
        ],
        sections: [
            { group: "A", sub: "1-2", day: "Sun", time: "12:40-14:20", room: "CR 4-5" },
            { group: "A", sub: "3", day: "Wed", time: "14:20-16:00", room: "CR 1" },
            { group: "A", sub: "4-6", day: "Wed", time: "10:40-12:20", room: "CR 1-3" }
        ]
    },
    {
        code: "IS202",
        name: "Data Base",
        shortName: "DB",
        level: 3,
        lectures: [
            { group: "A", day: "Mon", time: "09:00-10:40", room: "Hall 3" }
        ],
        labs: [
            { group: "A", sub: "1-2", day: "Tue", time: "14:20-16:00", room: "Lab 6-7" },
            { group: "A", sub: "3", day: "Mon", time: "10:40-12:20", room: "Lab 4" },
            { group: "A", sub: "4", day: "Sun", time: "14:20-16:00", room: "Lab 9" },
            { group: "A", sub: "5-6", day: "Sun", time: "10:40-12:20", room: "Lab 3-4" }
        ]
    },
    {
        code: "CS201",
        name: "Data Structure",
        shortName: "Data Struct",
        level: 3,
        lectures: [
            { group: "A", day: "Tue", time: "09:00-10:40", room: "Hall 4" }
        ],
        labs: [
            { group: "A", sub: "1-2", day: "Mon", time: "10:40-12:20", room: "Lab 2-3" },
            { group: "A", sub: "3", day: "Sun", time: "14:20-16:00", room: "Lab 5" },
            { group: "A", sub: "4", day: "Mon", time: "12:40-14:20", room: "Lab 2" },
            { group: "A", sub: "5-6", day: "Tue", time: "14:20-16:00", room: "Lab 8-9" },
            { group: "A", sub: "7-8", day: "Sun", time: "12:40-14:20", room: "Lab 9-10" }
        ]
    },
    {
        code: "IS201",
        name: "System Analysis",
        shortName: "Sys Analysis",
        level: 3,
        lectures: [
            { group: "A", day: "Wed", time: "09:00-10:40", room: "Hall 1" }
        ],
        labs: [
            { group: "A", sub: "1-2", day: "Sun", time: "14:20-16:00", room: "Lab 8,10" },
            { group: "A", sub: "3", day: "Wed", time: "10:40-12:20", room: "Lab 10" },
            { group: "A", sub: "4", day: "Sun", time: "12:40-14:20", room: "Lab 8" },
            { group: "A", sub: "5-6", day: "Wed", time: "14:20-16:00", room: "Lab 7-8" }
        ]
    },
    {
        code: "BS202",
        name: "Intro to Electronics",
        shortName: "Electronics",
        level: 3,
        lectures: [
            { group: "A", day: "Mon", time: "14:20-16:00", room: "Hall 4" }
        ],
        labs: [
            { group: "A", sub: "1-2", day: "Wed", time: "12:40-14:20", room: "PLab 1" },
            { group: "A", sub: "3", day: "Mon", time: "12:40-14:20", room: "PLab 2" },
            { group: "A", sub: "4", day: "Wed", time: "14:20-16:00", room: "PLab 1" },
            { group: "A", sub: "5-6", day: "Mon", time: "10:40-12:20", room: "PLab 1-2" }
        ]
    },
    {
        code: "HM201",
        name: "Communication",
        shortName: "Comm",
        level: 3,
        lectures: [
            { group: "A", day: "Tue", time: "12:40-14:20", room: "Hall 4" }
        ]
    },

    // --- Level 4 ---
    {
        code: "IT201",
        name: "Logic Design",
        shortName: "Logic",
        level: 4,
        lectures: [
            { group: "A", day: "Wed", time: "10:40-12:20", room: "Hall 1" },
            { group: "B", day: "Wed", time: "12:40-14:20", room: "Hall 1" },
            { group: "C", day: "Tue", time: "10:40-12:20", room: "Hall 3" },
            { group: "D", day: "Tue", time: "14:20-16:00", room: "Hall 3" }
        ],
        labs: [
            { group: "A", sub: "1-5", day: "Wed", time: "14:20-16:00", room: "Lab 2-6" },
            { group: "B", sub: "1-5", day: "Wed", time: "10:40-12:20", room: "Lab 2-6" },
            { group: "C", sub: "1-3", day: "Wed", time: "12:40-14:20", room: "Lab 3-5" },
            { group: "C", sub: "4-5", day: "Sun", time: "14:20-16:00", room: "Lab 6-7" },
            { group: "D", sub: "1-3", day: "Mon", time: "09:00-10:40", room: "Lab 8-10" },
            { group: "D", sub: "4-5", day: "Sun", time: "09:00-10:40", room: "Lab 3-4" }
        ]
    },
    {
        code: "IT203",
        name: "Network",
        shortName: "Network",
        level: 4,
        lectures: [
            { group: "A", day: "Mon", time: "12:40-14:20", room: "Hall 1" },
            { group: "B", day: "Mon", time: "14:20-16:00", room: "Hall 1" },
            { group: "C", day: "Tue", time: "14:20-16:00", room: "Hall 4" },
            { group: "D", day: "Sun", time: "14:20-16:00", room: "Hall 1" }
        ],
        labs: [
            { group: "A", sub: "1-5", day: "Tue", time: "09:00-10:40", room: "Lab 2-6" },
            { group: "B", sub: "1-5", day: "Mon", time: "12:40-14:20", room: "Lab 3-7" },
            { group: "C", sub: "1-5", day: "Wed", time: "09:00-10:40", room: "Lab 2-6" },
            { group: "D", sub: "1-5", day: "Tue", time: "12:40-14:20", room: "Lab 5-9" }
        ]
    },
    {
        code: "BS203",
        name: "Numerical Computing",
        shortName: "Numerical",
        level: 4,
        lectures: [
            { group: "A", day: "Sun", time: "12:40-14:20", room: "Hall 3D" },
            { group: "B", day: "Sun", time: "14:20-16:00", room: "Hall 1D" },
            { group: "C", day: "Mon", time: "12:40-14:20", room: "Hall 1D" },
            { group: "D", day: "Mon", time: "14:20-16:00", room: "Hall 2" }
        ],
        sections: [
            { group: "A", sub: "1-5", day: "Sun", time: "14:20-16:00", room: "CR 1-5" },
            { group: "B", sub: "1-3", day: "Mon", time: "09:00-10:40", room: "CR 1-3" },
            { group: "B", sub: "4-5", day: "Sun", time: "09:00-10:40", room: "CR 5-6" },
            { group: "C", sub: "1-4", day: "Mon", time: "10:40-12:20", room: "CR 1-4" },
            { group: "C", sub: "5", day: "Wed", time: "14:20-16:00", room: "CR 6" },
            { group: "D", sub: "1-4", day: "Tue", time: "10:40-12:20", room: "CR 1-4" },
            { group: "D", sub: "5", day: "Wed", time: "12:40-14:20", room: "CR 1" }
        ]
    },
    {
        code: "BS204",
        name: "Statistics & Probability",
        shortName: "Stats",
        level: 4,
        lectures: [
            { group: "A", day: "Tue", time: "10:40-12:20", room: "Hall 1" },
            { group: "B", day: "Tue", time: "14:20-16:00", room: "Hall 1" },
            { group: "C", day: "Tue", time: "12:40-14:20", room: "Hall 1" },
            { group: "D", day: "Tue", time: "09:00-10:40", room: "Hall 1" }
        ],
        sections: [
            { group: "A", sub: "1-3", day: "Wed", time: "09:00-10:40", room: "CR 1-3" },
            { group: "A", sub: "4", day: "Mon", time: "09:00-10:40", room: "CR 5" },
            { group: "A", sub: "5", day: "Tue", time: "14:20-16:00", room: "CR 4" },
            { group: "B", sub: "1-3", day: "Tue", time: "12:40-14:20", room: "CR 4-6" },
            { group: "B", sub: "4-5", day: "Mon", time: "10:40-12:20", room: "CR 5-6" },
            { group: "C", sub: "1-2", day: "Wed", time: "14:20-16:00", room: "CR 2-3" },
            { group: "C", sub: "3", day: "Tue", time: "09:00-10:40", room: "CR 6" },
            { group: "C", sub: "4-5", day: "Mon", time: "14:20-16:00", room: "CR 2-6" },
            { group: "D", sub: "1-2", day: "Wed", time: "10:40-12:20", room: "CR 4-5" },
            { group: "D", sub: "3", day: "Sun", time: "09:00-10:40", room: "CR 4" },
            { group: "D", sub: "4", day: "Sun", time: "10:40-12:20", room: "CR 6" },
            { group: "D", sub: "5", day: "Mon", time: "09:00-10:40", room: "CR 4" }
        ]
    },
    {
        code: "IT202",
        name: "Computer Graphics",
        shortName: "Graphics",
        level: 4,
        lectures: [
            { group: "A", day: "Sun", time: "10:40-12:20", room: "Hall 3" },
            { group: "B", day: "Sun", time: "12:40-14:20", room: "Hall 3" },
            { group: "C", day: "Sun", time: "10:40-12:20", room: "Hall 3" },
            { group: "D", day: "Sun", time: "12:40-14:20", room: "Hall 2" }
        ],
        labs: [
            { group: "A", sub: "1-3", day: "Tue", time: "14:20-16:00", room: "Lab 1,5,10" },
            { group: "A", sub: "4-5", day: "Tue", time: "12:40-14:20", room: "Lab 1,10" },
            { group: "B", sub: "1-3", day: "Tue", time: "10:40-12:20", room: "Lab 1-3" },
            { group: "B", sub: "4-5", day: "Tue", time: "09:00-10:40", room: "Lab 1,10" },
            { group: "C", sub: "1-3", day: "Mon", time: "14:20-16:00", room: "Lab 1-3" },
            { group: "C", sub: "4-5", day: "Sun", time: "09:00-10:40", room: "Lab 1,10" },
            { group: "D", sub: "1-3", day: "Wed", time: "12:40-14:20", room: "Lab 1-3" },
            { group: "D", sub: "4-5", day: "Mon", time: "12:40-14:20", room: "Lab 8-10" }
        ]
    },
    {
        code: "HM204",
        name: "Fund. of Management",
        shortName: "Management",
        level: 4,
        lectures: [
            { group: "A", day: "Wed", time: "12:40-14:20", room: "Hall 2" },
            { group: "B", day: "Wed", time: "09:00-10:40", room: "Hall 2" },
            { group: "C", day: "Wed", time: "10:40-12:20", room: "Hall 2" },
            { group: "D", day: "Wed", time: "14:20-16:00", room: "Hall 2" }
        ]
    }
];
