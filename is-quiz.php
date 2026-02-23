<!-- Quiz Section - Information Systems -->
<style>
.quiz-section { margin-top: 3rem; padding: 2rem; background: linear-gradient(145deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.04)); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.1); text-align: center; }
.quiz-btn { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border: none; padding: 1rem 2.5rem; border-radius: 50px; color: white; font-size: 1.2rem; font-weight: 700; cursor: pointer; transition: all 0.4s ease; box-shadow: 0 8px 25px rgba(245, 87, 108, 0.4); display: inline-flex; align-items: center; gap: 0.8rem; }
.quiz-btn:hover { transform: translateY(-5px) scale(1.05); box-shadow: 0 15px 40px rgba(245, 87, 108, 0.6); }
.quiz-modal { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.9); backdrop-filter: blur(10px); display: none; align-items: center; justify-content: center; z-index: 3000; }
.quiz-modal.active { display: flex; }
.quiz-container { background: linear-gradient(145deg, #1a2a33, #0f1f27); border-radius: 24px; padding: 2.5rem; width: 90%; max-width: 500px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5); }
.quiz-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(255, 255, 255, 0.1); }
.quiz-title { color: white; font-size: 1.8rem; font-weight: 700; }
.quiz-close { background: rgba(255, 255, 255, 0.1); border: none; color: white; width: 45px; height: 45px; border-radius: 50%; font-size: 1.5rem; cursor: pointer; transition: all 0.3s ease; }
.quiz-close:hover { background: #ff4757; transform: rotate(90deg); }
.coming-soon-content { padding: 3rem 1rem; }
.coming-soon-icon { font-size: 5rem; margin-bottom: 1.5rem; display: block; animation: bounce 2s infinite; }
@keyframes bounce { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }
.coming-soon-text { color: white; font-size: 1.5rem; font-weight: 600; margin-bottom: 0.5rem; }
.coming-soon-subtext { color: rgba(255, 255, 255, 0.6); font-size: 1rem; }
.exams-btn { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important; box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4) !important; }
.exams-btn:hover { box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6) !important; }
</style>

<div class="quiz-section">
    <h3 style="color: #fff; font-size: 1.3rem; margin-bottom: 1rem;">📝 Quick Quiz</h3>
    <p style="color: rgba(255,255,255,0.6); margin-bottom: 1.5rem;">Test your knowledge with practice questions</p>
    <button class="quiz-btn" onclick="openQuizModal()">
        <span>📝</span> Start Quiz
    </button>
</div>

<div class="quiz-modal" id="quizModal">
    <div class="quiz-container">
        <div class="quiz-header">
            <h2 class="quiz-title">📝 Information Systems Quiz</h2>
            <button class="quiz-close" onclick="closeQuizModal()">×</button>
        </div>
        <div class="coming-soon-content">
            <span class="coming-soon-icon">🚀</span>
            <p class="coming-soon-text">Coming Soon!</p>
            <p class="coming-soon-subtext">IS quiz questions will be added shortly</p>
        </div>
    </div>
</div>

<script>
function openQuizModal() { document.getElementById('quizModal').classList.add('active'); document.body.style.overflow = 'hidden'; }
function closeQuizModal() { document.getElementById('quizModal').classList.remove('active'); document.body.style.overflow = 'auto'; }
document.getElementById('quizModal').addEventListener('click', function(e) { if (e.target === this) closeQuizModal(); });
</script>
