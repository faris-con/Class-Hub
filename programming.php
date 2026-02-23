<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming - ClassHub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="programming-styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="mobile-nav.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
    </div>

    <nav class="navbar" id="navbar">
        <div class="nav-content">
            <div class="logo-container" onclick="scrollToHome()">
                <div class="logo-image">🎓</div>
                <div class="logo-text">ClassHub</div>
            </div>
            <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
            <ul class="nav-links">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item dropdown" id="lecturesDropdown">
                    <a href="#lectures" class="dropdown-toggle">
                        Lectures <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="first.php">First Year</a>
                        <a href="second.php">Second Year</a>
                        <a href="previous-semesters.php">Previous Semesters</a>
                    </div>
                </li>
                <li class="nav-item"><a href="programming.php" class="active">Programming</a></li>
                <li class="nav-item"><a href="communities.php">Communities</a></li>
                <li class="nav-item"><a href="schedule.php">Schedule</a></li>
                <li class="nav-item"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <h1 class="hero-title">&lt;/&gt; Programming</h1>
        <p class="hero-subtitle">Materials and resources for programming language course</p>
    </section>

    <div class="content-container">
        <!-- Java Materials Section -->
        <div class="materials-section">
            <h2 class="section-main-title">
                <svg class="java-logo" width="48" height="48" viewBox="0 0 128 128" style="vertical-align: middle; margin-right: 10px;">
                    <path fill="#EA2D2E" d="M47.617 98.12s-4.767 2.774 3.397 3.71c9.892 1.13 14.947.968 25.845-1.092 0 0 2.871 1.795 6.873 3.351-24.439 10.47-55.308-.607-36.115-5.969zm-2.988-13.665s-5.348 3.959 2.823 4.805c10.567 1.091 18.91 1.18 33.354-1.6 0 0 1.993 2.025 5.132 3.131-29.542 8.64-62.446.68-41.309-6.336z"/>
                    <path fill="#EA2D2E" d="M69.802 61.271c6.025 6.935-1.58 13.17-1.58 13.17s15.289-7.891 8.269-17.777c-6.559-9.215-11.587-13.792 15.635-29.58 0 .001-42.731 10.67-22.324 34.187z"/>
                    <path fill="#EA2D2E" d="M102.123 108.229s3.529 2.91-3.888 5.159c-14.102 4.272-58.706 5.56-71.095.171-4.451-1.938 3.899-4.625 6.526-5.192 2.739-.593 4.303-.485 4.303-.485-4.952-3.487-32.013 6.85-13.743 9.815 49.821 8.076 90.817-3.637 77.897-9.468zM49.912 70.294s-22.686 5.389-8.033 7.348c6.188.828 18.518.638 30.011-.326 9.39-.789 18.813-2.474 18.813-2.474s-3.308 1.419-5.704 3.053c-23.042 6.061-67.544 3.238-54.731-2.958 10.832-5.239 19.644-4.643 19.644-4.643zm40.697 22.747c23.421-12.167 12.591-23.86 5.032-22.285-1.848.385-2.677.72-2.677.72s.688-1.079 2-1.543c14.953-5.255 26.451 15.503-4.823 23.725 0-.002.359-.327.468-.617z"/>
                    <path fill="#EA2D2E" d="M76.491 1.587S89.459 14.563 64.188 34.51c-20.266 16.006-4.621 25.127-.007 35.559-11.831-10.673-20.509-20.07-14.688-28.815C58.041 28.42 81.722 22.195 76.491 1.587z"/>
                    <path fill="#EA2D2E" d="M52.214 126.021c22.476 1.437 57-.8 57.817-11.436 0 0-1.571 4.032-18.577 7.231-19.186 3.612-42.854 3.191-56.887.874 0 .001 2.875 2.381 17.647 3.331z"/>
                </svg>
                Java Materials
            </h2>
            
            <!-- Java Tools Section -->
            <div class="courses-section" style="margin-bottom: 2rem; padding: 1.5rem 2rem; background: linear-gradient(145deg, rgba(102, 126, 234, 0.15), rgba(118, 75, 162, 0.1)); border-radius: 16px; border: 1px solid rgba(102, 126, 234, 0.3); backdrop-filter: blur(10px);">
                <h3 style="color: #a8c0ff; margin-bottom: 1.2rem; font-size: 1.4rem; font-weight: 700; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <span style="font-size: 1.6rem;">🛠️</span> Java Tools
                </h3>
                <div class="course-buttons" style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                    <a href="https://code.visualstudio.com/download" target="_blank" class="course-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 14px 24px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; text-decoration: none; border-radius: 12px; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4); border: 1px solid rgba(255,255,255,0.1);">
                        💻 VS Code
                    </a>
                    <a href="https://www.jetbrains.com/idea/download/" target="_blank" class="course-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 14px 24px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; text-decoration: none; border-radius: 12px; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4); border: 1px solid rgba(255,255,255,0.1);">
                        🧠 IntelliJ IDEA
                    </a>
                    <a href="https://www.oracle.com/java/technologies/downloads/" target="_blank" class="course-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 14px 24px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; text-decoration: none; border-radius: 12px; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4); border: 1px solid rgba(255,255,255,0.1);">
                        ☕ Java JDK
                    </a>
                    <a href="https://www.onlinegdb.com/online_java_compiler" target="_blank" class="course-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 14px 24px; background: linear-gradient(135deg, #4ade80, #22c55e); color: white; text-decoration: none; border-radius: 12px; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(74, 222, 128, 0.4); border: 1px solid rgba(255,255,255,0.1);">
                        🌐 Online Compiler
                    </a>
                </div>
            </div>

            <!-- Courses for Java Section -->
            <div class="courses-section" style="margin-bottom: 2rem; padding: 1.5rem 2rem; background: linear-gradient(145deg, rgba(102, 126, 234, 0.15), rgba(118, 75, 162, 0.1)); border-radius: 16px; border: 1px solid rgba(102, 126, 234, 0.3); backdrop-filter: blur(10px);">
                <h3 style="color: #a8c0ff; margin-bottom: 1.2rem; font-size: 1.4rem; font-weight: 700; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <span style="font-size: 1.6rem;">🎬</span> Courses for Java
                </h3>
                <div class="course-buttons" style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                    <a href="https://www.youtube.com/watch?v=FbviMTJ_vP8&list=PL1DUmTEdeA6K7rdxKiWJq6JIxTvHalY8f" target="_blank" class="course-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 14px 24px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; text-decoration: none; border-radius: 12px; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4); border: 1px solid rgba(255,255,255,0.1);">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="white"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        الدسوقى
                    </a>
                    <a href="https://www.youtube.com/watch?v=mNvJipMTKSM&list=PLCInYL3l2AajYlZGzU_LVrHdoouf8W6ZN" target="_blank" class="course-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 14px 24px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; text-decoration: none; border-radius: 12px; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4); border: 1px solid rgba(255,255,255,0.1);">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="white"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        عادل نسيم
                    </a>
                    <a href="https://maharatech.gov.eg/course/view.php?id=2052" target="_blank" class="course-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 14px 24px; background: linear-gradient(135deg, #4ade80, #22c55e); color: white; text-decoration: none; border-radius: 12px; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(74, 222, 128, 0.4); border: 1px solid rgba(255,255,255,0.1);">
                        🎓 Maharatech with certificate
                    </a>
                </div>
            </div>

            <!-- Accordion Item 1: Java Fundamentals -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">📘</span>
                    <span class="accordion-title">Java Fundamentals</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- Scanner -->
                    <div class="topic-section">
                        <h3 class="topic-title">📥 Scanner (User Input)</h3>
                        <div class="topic-content">
                            <p><strong>ما هو Scanner؟</strong> هو class في Java يسمح لنا بقراءة البيانات من المستخدم عن طريق الـ keyboard.</p>
                            
                            <h4>1️⃣ أولاً: استيراد Scanner</h4>
                            <p>لازم نستورد الـ Scanner من مكتبة java.util قبل ما نستخدمه:</p>
                            <div class="code-block">
                                <pre>
import java.util.Scanner;  // نضيف هذا السطر في أول الملف
                                </pre>
                            </div>
                            
                            <h4>2️⃣ ثانياً: إنشاء كائن Scanner</h4>
                            <p>نحتاج نعمل object من Scanner ونربطه بالـ keyboard (System.in):</p>
                            <div class="code-block">
                                <pre>
Scanner input = new Scanner(System.in);
// Scanner = نوع الكائن
// input = اسم الكائن (يمكن تغييره لأي اسم)
// new Scanner(System.in) = إنشاء كائن جديد مرتبط بالكيبورد
                                </pre>
                            </div>
                            
                            <h4>3️⃣ ثالثاً: قراءة البيانات</h4>
                            <p>نستخدم methods مختلفة حسب نوع البيانات المراد قراءتها:</p>
                            <div class="code-block">
                                <pre>
// قراءة نص كامل (سطر كامل)
System.out.print("أدخل اسمك: ");    // طباعة رسالة للمستخدم
String name = input.nextLine();     // قراءة النص وحفظه في متغير name

// قراءة رقم صحيح
System.out.print("أدخل عمرك: ");
int age = input.nextInt();          // nextInt() تقرأ أرقام صحيحة فقط

// قراءة رقم عشري
System.out.print("أدخل راتبك: ");
double salary = input.nextDouble(); // nextDouble() تقرأ أرقام عشرية
                                </pre>
                            </div>
                            
                            <h4>4️⃣ مثال كامل مع الشرح:</h4>
                            <div class="code-block">
                                <pre>
import java.util.Scanner;  // الخطوة 1: استيراد Scanner

public class StudentInfo {
    public static void main(String[] args) {
        
        // الخطوة 2: إنشاء كائن Scanner
        Scanner input = new Scanner(System.in);
        
        // الخطوة 3: قراءة البيانات من المستخدم
        System.out.print("أدخل اسمك: ");
        String name = input.nextLine();  // قراءة الاسم
        
        System.out.print("أدخل عمرك: ");
        int age = input.nextInt();       // قراءة العمر
        
        System.out.print("أدخل معدلك: ");
        double gpa = input.nextDouble(); // قراءة المعدل
        
        // الخطوة 4: طباعة النتائج
        System.out.println("\n--- معلومات الطالب ---");
        System.out.println("الاسم: " + name);
        System.out.println("العمر: " + age);
        System.out.println("المعدل: " + gpa);
        
        // الخطوة 5: إغلاق Scanner (مهم!)
        input.close();
    }
}
                                </pre>
                            </div>
                            
                            <h4>📋 جدول Methods الأساسية:</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Method</th>
                                            <th>الوظيفة</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>nextLine()</td>
                                            <td>يقرأ سطر كامل (نص)</td>
                                        </tr>
                                        <tr>
                                            <td>next()</td>
                                            <td>يقرأ كلمة واحدة فقط</td>
                                        </tr>
                                        <tr>
                                            <td>nextInt()</td>
                                            <td>يقرأ رقم صحيح (int)</td>
                                        </tr>
                                        <tr>
                                            <td>nextDouble()</td>
                                            <td>يقرأ رقم عشري (double)</td>
                                        </tr>
                                        <tr>
                                            <td>nextFloat()</td>
                                            <td>يقرأ رقم عشري (float)</td>
                                        </tr>
                                        <tr>
                                            <td>nextBoolean()</td>
                                            <td>يقرأ true أو false</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <h4>⚠️ ملاحظة مهمة:</h4>
                            <p>لو استخدمت <code>nextInt()</code> أو <code>nextDouble()</code> قبل <code>nextLine()</code>، لازم تضيف <code>input.nextLine();</code> فاضي بينهم عشان تتجنب مشكلة الـ buffer.</p>
                        </div>
                    </div>

                    <!-- Data Types -->
                    <div class="topic-section">
                        <h3 class="topic-title">📊 Data Types</h3>
                        <div class="topic-content">
                            <p>Java has two categories of data types:</p>
                            
                            <h4>Primitive Data Types:</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Description / Range</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>byte</td>
                                            <td>1 byte</td>
                                            <td>-128 to 127</td>
                                        </tr>
                                        <tr>
                                            <td>short</td>
                                            <td>2 bytes</td>
                                            <td>-32,768 to 32,767</td>
                                        </tr>
                                        <tr>
                                            <td>int</td>
                                            <td>4 bytes</td>
                                            <td>Whole numbers (e.g. 1000)</td>
                                        </tr>
                                        <tr>
                                            <td>long</td>
                                            <td>8 bytes</td>
                                            <td>Large numbers (ends with L)</td>
                                        </tr>
                                        <tr>
                                            <td>float</td>
                                            <td>4 bytes</td>
                                            <td>Fractional numbers (ends with f)</td>
                                        </tr>
                                        <tr>
                                            <td>double</td>
                                            <td>8 bytes</td>
                                            <td>Fractional numbers (default)</td>
                                        </tr>
                                        <tr>
                                            <td>boolean</td>
                                            <td>1 bit</td>
                                            <td>true or false</td>
                                        </tr>
                                        <tr>
                                            <td>char</td>
                                            <td>2 bytes</td>
                                            <td>Single character (e.g. 'A')</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <h4>Reference Data Types:</h4>
                            <div class="code-block">
                                <pre>
String myString = "Hello World";  // Text
int[] myArray = {1, 2, 3, 4, 5};  // Array
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Variables -->
                    <div class="topic-section">
                        <h3 class="topic-title">📝 Variables</h3>
                        <div class="topic-content">
                            <p>Variables are containers for storing data values.</p>
                            
                            <h4>Declaring Variables:</h4>
                            <div class="code-block">
                                <pre>
// Syntax: type variableName = value;
int age = 25;
String name = "Ahmed";
double salary = 5000.50;

// Multiple variables of same type
int x = 5, y = 10, z = 15;

// Constants (cannot be changed)
final double PI = 3.14159;
                                </pre>
                            </div>
                            
                            <h4>Variable Naming Rules:</h4>
                            <ul class="topic-list">
                                <li>Must start with a letter, $ or _</li>
                                <li>Cannot use Java keywords (int, class, etc.)</li>
                                <li>Case sensitive (myVar ≠ myvar)</li>
                                <li>Use camelCase for readability</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Operators -->
                    <div class="topic-section">
                        <h3 class="topic-title">⚙️ Operators</h3>
                        <div class="topic-content">
                            
                            <h4>Arithmetic Operators:</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Operator</th>
                                            <th>Name</th>
                                            <th>Example (a=10, b=3)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>+</td>
                                            <td>Addition</td>
                                            <td>a + b = 13</td>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>Subtraction</td>
                                            <td>a - b = 7</td>
                                        </tr>
                                        <tr>
                                            <td>*</td>
                                            <td>Multiplication</td>
                                            <td>a * b = 30</td>
                                        </tr>
                                        <tr>
                                            <td>/</td>
                                            <td>Division</td>
                                            <td>a / b = 3</td>
                                        </tr>
                                        <tr>
                                            <td>%</td>
                                            <td>Modulus</td>
                                            <td>a % b = 1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <h4>Comparison Operators:</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Operator</th>
                                            <th>Meaning</th>
                                            <th>Example</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>==</td>
                                            <td>Equal to</td>
                                            <td>a == b</td>
                                        </tr>
                                        <tr>
                                            <td>!=</td>
                                            <td>Not equal</td>
                                            <td>a != b</td>
                                        </tr>
                                        <tr>
                                            <td>&gt;</td>
                                            <td>Greater than</td>
                                            <td>a &gt; b</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;</td>
                                            <td>Less than</td>
                                            <td>a &lt; b</td>
                                        </tr>
                                        <tr>
                                            <td>&gt;=</td>
                                            <td>Greater than or equal</td>
                                            <td>a &gt;= b</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;=</td>
                                            <td>Less than or equal</td>
                                            <td>a &lt;= b</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <h4>Logical Operators:</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Operator</th>
                                            <th>Meaning</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&&</td>
                                            <td>AND</td>
                                            <td>Returns true if <strong>both</strong> statements are true</td>
                                        </tr>
                                        <tr>
                                            <td>||</td>
                                            <td>OR</td>
                                            <td>Returns true if <strong>one</strong> of the statements is true</td>
                                        </tr>
                                        <tr>
                                            <td>!</td>
                                            <td>NOT</td>
                                            <td>Reverse the result, returns false if the result is true</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Control Statements -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔀 Control Statements</h3>
                        <div class="topic-content">
                            
                            <h4>If-Else Statement:</h4>
                            <div class="code-block">
                                <pre>
int score = 85;

if (score >= 90) {
    System.out.println("Excellent!");
} else if (score >= 70) {
    System.out.println("Good job!");
} else {
    System.out.println("Keep trying!");
}
                                </pre>
                            </div>
                            
                            <h4>Switch Statement:</h4>
                            <div class="code-block">
                                <pre>
int day = 3;
switch (day) {
    case 1:
        System.out.println("Saturday");
        break;
    case 2:
        System.out.println("Sunday");
        break;
    case 3:
        System.out.println("Monday");
        break;
    default:
        System.out.println("Other day");
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Loops -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔄 Loops</h3>
                        <div class="topic-content">
                            
                            <h4>For Loop:</h4>
                            <div class="code-block">
                                <pre>
// Print numbers 1 to 5
for (int i = 1; i <= 5; i++) {
    System.out.println(i);
}
                                </pre>
                            </div>
                            
                            <h4>While Loop:</h4>
                            <div class="code-block">
                                <pre>
int i = 1;
while (i <= 5) {
    System.out.println(i);
    i++;
}
                                </pre>
                            </div>
                            
                            <h4>Do-While Loop:</h4>
                            <div class="code-block">
                                <pre>
int i = 1;
do {
    System.out.println(i);
    i++;
} while (i <= 5);
                                </pre>
                            </div>
                            
                            <h4>For-Each Loop (Enhanced For):</h4>
                            <div class="code-block">
                                <pre>
String[] names = {"Ali", "Omar", "Sara"};
for (String name : names) {
    System.out.println(name);
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Arrays -->
                    <div class="topic-section">
                        <h3 class="topic-title">📚 Arrays (المصفوفات)</h3>
                        <div class="topic-content">
                            <p><strong>ما هي الـ Array؟</strong> هي data structure تسمح لنا بتخزين عدة قيم من نفس النوع في متغير واحد. بدل ما نعمل 100 متغير، نعمل array واحدة!</p>
                            
                            <h4>1️⃣ إنشاء Array:</h4>
                            <p>في طريقتين لإنشاء Array:</p>
                            <div class="code-block">
                                <pre>
// الطريقة الأولى: تحديد الحجم ثم تعبئة القيم
int[] numbers = new int[5];     // إنشاء array تتسع لـ 5 أرقام
// int[] = نوع البيانات (array من integers)
// numbers = اسم المتغير
// new int[5] = إنشاء array بحجم 5 عناصر

// تعبئة القيم (الـ index يبدأ من 0)
numbers[0] = 10;   // العنصر الأول
numbers[1] = 20;   // العنصر الثاني
numbers[2] = 30;   // العنصر الثالث
numbers[3] = 40;   // العنصر الرابع
numbers[4] = 50;   // العنصر الخامس

// الطريقة الثانية: إنشاء وتعبئة في نفس الوقت
int[] scores = {90, 85, 78, 92, 88};  // أسهل وأسرع!
                                </pre>
                            </div>
                            
                            <h4>2️⃣ الوصول للعناصر:</h4>
                            <div class="code-block">
                                <pre>
int[] grades = {95, 88, 76, 91, 82};

// قراءة عنصر معين باستخدام الـ index
System.out.println(grades[0]);    // Output: 95 (العنصر الأول)
System.out.println(grades[2]);    // Output: 76 (العنصر الثالث)
System.out.println(grades[4]);    // Output: 82 (العنصر الأخير)

// معرفة حجم الـ array
System.out.println(grades.length);  // Output: 5

// تغيير قيمة عنصر
grades[1] = 90;  // تغيير العنصر الثاني من 88 إلى 90
                                </pre>
                            </div>
                            
                            <h4>3️⃣ المرور على كل العناصر (Loop):</h4>
                            <div class="code-block">
                                <pre>
int[] numbers = {10, 20, 30, 40, 50};

// الطريقة 1: باستخدام for loop عادي
System.out.println("--- For Loop ---");
for (int i = 0; i < numbers.length; i++) {
    System.out.println("العنصر " + i + " = " + numbers[i]);
}
// Output:
// العنصر 0 = 10
// العنصر 1 = 20
// ...وهكذا

// الطريقة 2: باستخدام for-each (أسهل)
System.out.println("--- For-Each Loop ---");
for (int num : numbers) {
    System.out.println(num);
}
                                </pre>
                            </div>
                            
                            <h4>4️⃣ مثال عملي - حساب المجموع والمتوسط:</h4>
                            <div class="code-block">
                                <pre>
int[] grades = {90, 85, 78, 92, 88};
int sum = 0;  // متغير لتخزين المجموع

// جمع كل العناصر
for (int grade : grades) {
    sum = sum + grade;  // أو sum += grade;
}

// حساب المتوسط
double average = (double) sum / grades.length;

System.out.println("المجموع: " + sum);        // Output: 433
System.out.println("المتوسط: " + average);    // Output: 86.6
                                </pre>
                            </div>
                            
                            <h4>5️⃣ مثال عملي - البحث عن أكبر وأصغر قيمة:</h4>
                            <div class="code-block">
                                <pre>
int[] numbers = {45, 12, 78, 34, 56, 89, 23};

int max = numbers[0];  // نفترض أن الأول هو الأكبر
int min = numbers[0];  // نفترض أن الأول هو الأصغر

for (int num : numbers) {
    if (num > max) {
        max = num;  // لقينا أكبر
    }
    if (num < min) {
        min = num;  // لقينا أصغر
    }
}

System.out.println("أكبر قيمة: " + max);  // Output: 89
System.out.println("أصغر قيمة: " + min);  // Output: 12
                                </pre>
                            </div>
                            
                            <h4>6️⃣ المصفوفات ثنائية الأبعاد (2D Arrays):</h4>
                            <p>تخيلها كجدول فيه صفوف وأعمدة:</p>
                            <div class="code-block">
                                <pre>
// إنشاء جدول 3 صفوف × 3 أعمدة
int[][] matrix = {
    {1, 2, 3},    // الصف 0
    {4, 5, 6},    // الصف 1
    {7, 8, 9}     // الصف 2
};

// الوصول لعنصر: matrix[صف][عمود]
System.out.println(matrix[0][0]);  // Output: 1 (أول صف، أول عمود)
System.out.println(matrix[1][2]);  // Output: 6 (ثاني صف، ثالث عمود)
System.out.println(matrix[2][1]);  // Output: 8 (ثالث صف، ثاني عمود)

// طباعة كل الجدول
for (int i = 0; i < matrix.length; i++) {
    for (int j = 0; j < matrix[i].length; j++) {
        System.out.print(matrix[i][j] + " ");
    }
    System.out.println();  // سطر جديد بعد كل صف
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Methods -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔧 Methods (الدوال)</h3>
                        <div class="topic-content">
                            <p><strong>ما هي الـ Method؟</strong> هي مجموعة أوامر مع بعض في مكان واحد، نقدر ننادي عليها (نستدعيها) في أي وقت. الهدف منها: تنظيم الكود + منع التكرار.</p>
                            
                            <h4>1️⃣ بنية الـ Method:</h4>
                            <div class="code-block">
                                <pre>
// الشكل العام:
accessModifier static returnType methodName(parameters) {
    // body - الأوامر
    return value;  // لو فيه return
}

// مثال بسيط:
public static void sayHello() {
    System.out.println("مرحباً!");
}

// public = يمكن الوصول إليها من أي مكان
// static = تابعة للـ class مش للـ object
// void = لا ترجع قيمة
// sayHello = اسم الدالة
// () = لا تأخذ parameters
                                </pre>
                            </div>
                            
                            <h4>2️⃣ أنواع الـ Methods:</h4>
                            
                            <h4>النوع 1: Method بدون parameters وبدون return (void)</h4>
                            <div class="code-block">
                                <pre>
// تعريف الدالة
public static void printWelcome() {
    System.out.println("╔═══════════════════════╗");
    System.out.println("║   مرحباً بك في Java   ║");
    System.out.println("╚═══════════════════════╝");
}

// استدعاء الدالة في main
public static void main(String[] args) {
    printWelcome();  // هتطبع رسالة الترحيب
    printWelcome();  // نقدر ننادي عليها كتير!
}
                                </pre>
                            </div>
                            
                            <h4>النوع 2: Method مع parameters (تأخذ قيم)</h4>
                            <div class="code-block">
                                <pre>
// الدالة تأخذ اسم كـ parameter
public static void greet(String name) {
    System.out.println("أهلاً يا " + name + "!");
}

// الدالة تأخذ أكثر من parameter
public static void printStudentInfo(String name, int age, double gpa) {
    System.out.println("الاسم: " + name);
    System.out.println("العمر: " + age);
    System.out.println("المعدل: " + gpa);
}

// الاستدعاء
public static void main(String[] args) {
    greet("أحمد");                       // Output: أهلاً يا أحمد!
    greet("سارة");                       // Output: أهلاً يا سارة!
    printStudentInfo("محمد", 20, 3.5);   // هيطبع كل المعلومات
}
                                </pre>
                            </div>
                            
                            <h4>النوع 3: Method مع return (ترجع قيمة)</h4>
                            <div class="code-block">
                                <pre>
// دالة تجمع رقمين وترجع النتيجة
public static int add(int a, int b) {
    int result = a + b;
    return result;  // ترجع النتيجة
}
// لاحظ: نوع الـ return هو int (مش void)

// دالة تحسب مساحة المستطيل
public static double calculateArea(double length, double width) {
    return length * width;  // يمكن return مباشرة
}

// الاستدعاء
public static void main(String[] args) {
    int sum = add(5, 3);                    // sum = 8
    System.out.println("المجموع: " + sum);
    
    double area = calculateArea(10.5, 5.0); // area = 52.5
    System.out.println("المساحة: " + area);
    
    // يمكن استخدام الدالة مباشرة في print
    System.out.println("5 + 7 = " + add(5, 7));  // Output: 5 + 7 = 12
}
                                </pre>
                            </div>
                            
                            <h4>3️⃣ مثال شامل - برنامج حاسبة:</h4>
                            <div class="code-block">
                                <pre>
import java.util.Scanner;

public class Calculator {
    
    // دالة الجمع
    public static double add(double a, double b) {
        return a + b;
    }
    
    // دالة الطرح
    public static double subtract(double a, double b) {
        return a - b;
    }
    
    // دالة الضرب
    public static double multiply(double a, double b) {
        return a * b;
    }
    
    // دالة القسمة
    public static double divide(double a, double b) {
        if (b == 0) {
            System.out.println("خطأ: لا يمكن القسمة على صفر!");
            return 0;
        }
        return a / b;
    }
    
    // الدالة الرئيسية
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        
        System.out.print("أدخل الرقم الأول: ");
        double num1 = input.nextDouble();
        
        System.out.print("أدخل الرقم الثاني: ");
        double num2 = input.nextDouble();
        
        // استخدام الدوال
        System.out.println("\nالنتائج:");
        System.out.println("الجمع: " + add(num1, num2));
        System.out.println("الطرح: " + subtract(num1, num2));
        System.out.println("الضرب: " + multiply(num1, num2));
        System.out.println("القسمة: " + divide(num1, num2));
        
        input.close();
    }
}
                                </pre>
                            </div>
                            
                            <h4>4️⃣ Method Overloading (تعدد الأشكال):</h4>
                            <p>يمكن عمل أكثر من method بنفس الاسم لكن بـ parameters مختلفة:</p>
                            <div class="code-block">
                                <pre>
// نفس الاسم، parameters مختلفة
public static int add(int a, int b) {
    return a + b;
}

public static int add(int a, int b, int c) {
    return a + b + c;  // تجمع 3 أرقام
}

public static double add(double a, double b) {
    return a + b;  // تجمع أرقام عشرية
}

// Java تختار الدالة المناسبة تلقائياً
public static void main(String[] args) {
    System.out.println(add(5, 3));        // يستدعي الأولى → 8
    System.out.println(add(5, 3, 2));     // يستدعي الثانية → 10
    System.out.println(add(5.5, 3.5));    // يستدعي الثالثة → 9.0
}
                                </pre>
                            </div>
                            
                            <h4>📋 ملخص:</h4>
                            <ul class="topic-list">
                                <li><code>void</code> → الدالة لا ترجع شيء</li>
                                <li><code>int, double, String...</code> → الدالة ترجع قيمة من هذا النوع</li>
                                <li><code>parameters</code> → القيم اللي الدالة تحتاجها للعمل</li>
                                <li><code>return</code> → ترجع القيمة وتنهي الدالة</li>
                                <li><code>Overloading</code> → نفس الاسم، parameters مختلفة</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item 2: OOP -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">🎯</span>
                    <span class="accordion-title">Object-Oriented Programming (OOP)</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- What is OOP -->
                    <div class="topic-section">
                        <h3 class="topic-title">🎯 ما هي البرمجة الكائنية (OOP)؟</h3>
                        <div class="topic-content">
                            <p><strong>OOP = Object-Oriented Programming</strong> هي طريقة لتنظيم الكود بحيث نحاكي الواقع. نتعامل مع البرنامج كأنه مجموعة "كائنات" (Objects) كل واحد له صفاته وسلوكه.</p>
                            
                            <h4>🔑 المفاهيم الأساسية:</h4>
                            <ul class="topic-list">
                                <li><strong>Class (الفئة):</strong> القالب أو التصميم - مثل خريطة البناء</li>
                                <li><strong>Object (الكائن):</strong> النسخة الحقيقية من الـ Class - مثل البيت المبني</li>
                                <li><strong>Attributes (الصفات):</strong> المتغيرات داخل الـ Class - مثل اللون، الاسم</li>
                                <li><strong>Methods (الأساليب):</strong> الدوال داخل الـ Class - مثل المشي، الأكل</li>
                            </ul>
                            
                            <h4>🌍 مثال من الواقع:</h4>
                            <div class="code-block">
                                <pre>
// تخيل الـ Class كقالب "سيارة"
Class: Car (السيارة)
├── Attributes (الصفات):
│   ├── color (اللون)
│   ├── brand (الماركة)
│   └── speed (السرعة)
└── Methods (السلوك):
    ├── start() (تشغيل)
    ├── stop() (إيقاف)
    └── accelerate() (تسريع)

// الـ Objects هي السيارات الحقيقية:
Object 1: سيارة أحمد (BMW, أحمر, 120 كم/س)
Object 2: سيارة سارة (Toyota, أبيض, 100 كم/س)
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Classes and Objects -->
                    <div class="topic-section">
                        <h3 class="topic-title">📦 Classes و Objects</h3>
                        <div class="topic-content">
                            
                            <h4>1️⃣ إنشاء Class:</h4>
                            <div class="code-block">
                                <pre>
// ملف Student.java
public class Student {
    
    // الصفات (Attributes / Instance Variables)
    String name;      // اسم الطالب
    int age;          // العمر
    double gpa;       // المعدل
    String major;     // التخصص
    
    // السلوك (Methods)
    void study() {
        System.out.println(name + " يدرس الآن...");
    }
    
    void sleep() {
        System.out.println(name + " ينام...");
    }
    
    void showInfo() {
        System.out.println("--- معلومات الطالب ---");
        System.out.println("الاسم: " + name);
        System.out.println("العمر: " + age);
        System.out.println("المعدل: " + gpa);
        System.out.println("التخصص: " + major);
    }
}
                                </pre>
                            </div>
                            
                            <h4>2️⃣ إنشاء Objects من الـ Class:</h4>
                            <div class="code-block">
                                <pre>
// ملف Main.java
public class Main {
    public static void main(String[] args) {
        
        // إنشاء كائن (Object) من Class Student
        Student student1 = new Student();
        // Student = نوع الكائن (الـ Class)
        // student1 = اسم الكائن
        // new Student() = إنشاء كائن جديد
        
        // تعيين قيم الصفات
        student1.name = "أحمد";
        student1.age = 20;
        student1.gpa = 3.5;
        student1.major = "Computer Science";
        
        // استدعاء الـ Methods
        student1.showInfo();
        student1.study();
        
        // إنشاء كائن آخر
        Student student2 = new Student();
        student2.name = "سارة";
        student2.age = 21;
        student2.gpa = 3.8;
        student2.major = "Software Engineering";
        
        student2.showInfo();
    }
}
                                </pre>
                            </div>
                            
                            <h4>📌 ملاحظة مهمة:</h4>
                            <p>كل Object له نسخته الخاصة من الـ Attributes. لو غيرت اسم student1، student2 ما يتأثر!</p>
                        </div>
                    </div>

                    <!-- Constructor -->
                    <div class="topic-section">
                        <h3 class="topic-title">🏗️ Constructor (المُنشئ)</h3>
                        <div class="topic-content">
                            <p><strong>ما هو Constructor؟</strong> هو method خاص يُستدعى تلقائياً عند إنشاء Object. يُستخدم لتهيئة الصفات بقيم أولية.</p>
                            
                            <h4>قواعد الـ Constructor:</h4>
                            <ul class="topic-list">
                                <li>اسمه نفس اسم الـ Class بالضبط</li>
                                <li>لا يوجد له return type (حتى void ممنوع)</li>
                                <li>يُستدعى تلقائياً عند new</li>
                            </ul>
                            
                            <h4>1️⃣ Constructor بدون Parameters:</h4>
                            <div class="code-block">
                                <pre>
public class Student {
    String name;
    int age;
    
    // Constructor - نفس اسم الـ Class
    public Student() {
        // يُنفذ تلقائياً عند إنشاء Object
        System.out.println("تم إنشاء طالب جديد!");
        name = "غير معروف";
        age = 0;
    }
}

// الاستخدام
Student s = new Student();  // يطبع: تم إنشاء طالب جديد!
                                </pre>
                            </div>
                            
                            <h4>2️⃣ Constructor مع Parameters:</h4>
                            <div class="code-block">
                                <pre>
public class Student {
    String name;
    int age;
    double gpa;
    
    // Constructor يأخذ قيم
    public Student(String studentName, int studentAge, double studentGpa) {
        name = studentName;
        age = studentAge;
        gpa = studentGpa;
    }
    
    void showInfo() {
        System.out.println(name + " - " + age + " سنة - GPA: " + gpa);
    }
}

// الاستخدام - نمرر القيم مباشرة
Student s1 = new Student("أحمد", 20, 3.5);
Student s2 = new Student("سارة", 21, 3.8);

s1.showInfo();  // Output: أحمد - 20 سنة - GPA: 3.5
s2.showInfo();  // Output: سارة - 21 سنة - GPA: 3.8
                                </pre>
                            </div>
                            
                            <h4>3️⃣ استخدام this:</h4>
                            <p><code>this</code> تشير للـ Object الحالي. تُستخدم عندما اسم الـ parameter نفس اسم الـ attribute:</p>
                            <div class="code-block">
                                <pre>
public class Student {
    String name;
    int age;
    
    public Student(String name, int age) {
        // name = name; ❌ خطأ! أسماء متشابهة
        this.name = name;  // ✅ this.name = الـ attribute
        this.age = age;    //    name = الـ parameter
    }
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Encapsulation -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔒 Encapsulation (التغليف)</h3>
                        <div class="topic-content">
                            <p><strong>ما هو Encapsulation؟</strong> هو إخفاء البيانات الداخلية للـ Class ومنع الوصول المباشر لها. نستخدم Getters و Setters للتحكم في الوصول.</p>
                            
                            <h4>لماذا نستخدم Encapsulation؟</h4>
                            <ul class="topic-list">
                                <li>حماية البيانات من التعديل الخاطئ</li>
                                <li>التحكم في كيفية قراءة/كتابة البيانات</li>
                                <li>إمكانية إضافة validation (تحقق)</li>
                            </ul>
                            
                            <h4>Access Modifiers:</h4>
                            <div class="code-block">
                                <pre>
public    → يمكن الوصول من أي مكان
private   → يمكن الوصول فقط من داخل الـ Class
protected → يمكن الوصول من الـ Class والـ subclasses
default   → يمكن الوصول من نفس الـ package
                                </pre>
                            </div>
                            
                            <h4>مثال بدون Encapsulation (خطأ):</h4>
                            <div class="code-block">
                                <pre>
public class BankAccount {
    public double balance;  // ⚠️ public = خطر!
}

// أي شخص يقدر يغير الرصيد!
BankAccount acc = new BankAccount();
acc.balance = -5000;  // رصيد سالب! 😱
                                </pre>
                            </div>
                            
                            <h4>مثال مع Encapsulation (صحيح):</h4>
                            <div class="code-block">
                                <pre>
public class BankAccount {
    private double balance;  // ✅ private = محمي
    private String ownerName;
    
    // Constructor
    public BankAccount(String ownerName, double initialBalance) {
        this.ownerName = ownerName;
        if (initialBalance >= 0) {
            this.balance = initialBalance;
        } else {
            this.balance = 0;
        }
    }
    
    // Getter - للقراءة فقط
    public double getBalance() {
        return balance;
    }
    
    public String getOwnerName() {
        return ownerName;
    }
    
    // Setter - للكتابة مع validation
    public void setBalance(double amount) {
        if (amount >= 0) {
            balance = amount;
        } else {
            System.out.println("خطأ: الرصيد لا يمكن أن يكون سالباً!");
        }
    }
    
    // Methods للعمليات
    public void deposit(double amount) {
        if (amount > 0) {
            balance += amount;
            System.out.println("تم إيداع " + amount + " ريال");
        }
    }
    
    public void withdraw(double amount) {
        if (amount > 0 && amount <= balance) {
            balance -= amount;
            System.out.println("تم سحب " + amount + " ريال");
        } else {
            System.out.println("رصيد غير كافٍ!");
        }
    }
}

// الاستخدام
BankAccount acc = new BankAccount("أحمد", 1000);
acc.deposit(500);           // تم إيداع 500 ريال
acc.withdraw(200);          // تم سحب 200 ريال
System.out.println(acc.getBalance());  // 1300
acc.setBalance(-100);       // خطأ: الرصيد لا يمكن أن يكون سالباً!
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Inheritance -->
                    <div class="topic-section">
                        <h3 class="topic-title">👨‍👩‍👧 Inheritance (الوراثة)</h3>
                        <div class="topic-content">
                            <p><strong>ما هي Inheritance؟</strong> هي أن يرث Class جديد (Child) الصفات والـ Methods من Class موجود (Parent). نستخدم كلمة <code>extends</code>.</p>
                            
                            <h4>فوائد الوراثة:</h4>
                            <ul class="topic-list">
                                <li>إعادة استخدام الكود (Code Reusability)</li>
                                <li>تنظيم الـ Classes في هيكل هرمي</li>
                                <li>تقليل التكرار</li>
                            </ul>
                            
                            <h4>مثال:</h4>
                            <div class="code-block">
                                <pre>
// الـ Parent Class (الأب)
public class Person {
    protected String name;
    protected int age;
    
    public Person(String name, int age) {
        this.name = name;
        this.age = age;
    }
    
    public void introduce() {
        System.out.println("مرحباً، اسمي " + name + " وعمري " + age);
    }
    
    public void sleep() {
        System.out.println(name + " ينام...");
    }
}

// الـ Child Class (الابن) - يرث من Person
public class Student extends Person {
    private String major;
    private double gpa;
    
    public Student(String name, int age, String major, double gpa) {
        super(name, age);  // استدعاء constructor الأب
        this.major = major;
        this.gpa = gpa;
    }
    
    // Method جديد خاص بـ Student
    public void study() {
        System.out.println(name + " يدرس " + major);
    }
    
    public void showGPA() {
        System.out.println("المعدل: " + gpa);
    }
}

// الـ Child Class آخر
public class Teacher extends Person {
    private String subject;
    private double salary;
    
    public Teacher(String name, int age, String subject, double salary) {
        super(name, age);
        this.subject = subject;
        this.salary = salary;
    }
    
    public void teach() {
        System.out.println(name + " يُدرّس " + subject);
    }
}

// الاستخدام
Student s = new Student("أحمد", 20, "CS", 3.5);
s.introduce();  // ورث من Person ✅
s.sleep();      // ورث من Person ✅
s.study();      // خاص بـ Student ✅

Teacher t = new Teacher("محمد", 35, "Java", 8000);
t.introduce();  // ورث من Person ✅
t.teach();      // خاص بـ Teacher ✅
                                </pre>
                            </div>
                            
                            <h4>📌 كلمات مهمة:</h4>
                            <ul class="topic-list">
                                <li><code>extends</code> → للوراثة من class آخر</li>
                                <li><code>super</code> → للوصول لـ constructor أو methods الأب</li>
                                <li><code>protected</code> → الأبناء يقدرون يوصلون للصفات</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Polymorphism -->
                    <div class="topic-section">
                        <h3 class="topic-title">🎭 Polymorphism (تعدد الأشكال)</h3>
                        <div class="topic-content">
                            <p><strong>ما هو Polymorphism؟</strong> هو أن الـ Object الواحد يمكن أن يتصرف بأشكال مختلفة. نفس الـ Method يعمل بطريقة مختلفة حسب الـ Object.</p>
                            
                            <h4>نوعين من Polymorphism:</h4>
                            <ul class="topic-list">
                                <li><strong>Method Overloading:</strong> نفس الاسم، parameters مختلفة (في نفس الـ Class)</li>
                                <li><strong>Method Overriding:</strong> الابن يعيد تعريف method الأب</li>
                            </ul>
                            
                            <h4>Method Overriding - مثال:</h4>
                            <div class="code-block">
                                <pre>
// الـ Parent
public class Animal {
    public void makeSound() {
        System.out.println("الحيوان يصدر صوتاً");
    }
}

// الأبناء يعيدون تعريف الـ Method
public class Cat extends Animal {
    @Override
    public void makeSound() {
        System.out.println("مياو مياو! 🐱");
    }
}

public class Dog extends Animal {
    @Override
    public void makeSound() {
        System.out.println("هاو هاو! 🐕");
    }
}

public class Bird extends Animal {
    @Override
    public void makeSound() {
        System.out.println("تغريد تغريد! 🐦");
    }
}

// الاستخدام
Animal myAnimal = new Animal();
Animal myCat = new Cat();      // Polymorphism!
Animal myDog = new Dog();
Animal myBird = new Bird();

myAnimal.makeSound();  // الحيوان يصدر صوتاً
myCat.makeSound();     // مياو مياو! 🐱
myDog.makeSound();     // هاو هاو! 🐕
myBird.makeSound();    // تغريد تغريد! 🐦

// نفس الـ Method اسمه makeSound()
// لكن كل Object يتصرف بشكل مختلف!
                                </pre>
                            </div>
                            
                            <h4>فائدة عملية - Array من أنواع مختلفة:</h4>
                            <div class="code-block">
                                <pre>
Animal[] zoo = new Animal[4];
zoo[0] = new Cat();
zoo[1] = new Dog();
zoo[2] = new Bird();
zoo[3] = new Dog();

// نمر على كل الحيوانات
for (Animal animal : zoo) {
    animal.makeSound();  // كل واحد يصدر صوته!
}
// Output:
// مياو مياو! 🐱
// هاو هاو! 🐕
// تغريد تغريد! 🐦
// هاو هاو! 🐕
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- OOP Summary -->
                    <div class="topic-section">
                        <h3 class="topic-title">📋 ملخص OOP</h3>
                        <div class="topic-content">
                            <h4>الأربع ركائز الأساسية:</h4>
                            <div class="code-block">
                                <pre>
1. Encapsulation (التغليف)
   └── إخفاء البيانات + Getters/Setters

2. Inheritance (الوراثة)
   └── Child extends Parent

3. Polymorphism (تعدد الأشكال)
   └── نفس الـ Method، سلوك مختلف

4. Abstraction (التجريد)
   └── إخفاء التفاصيل المعقدة (سنشرحه لاحقاً)
                                </pre>
                            </div>
                            
                            <h4>📌 Keywords المهمة:</h4>
                            <ul class="topic-list">
                                <li><code>class</code> → تعريف Class</li>
                                <li><code>new</code> → إنشاء Object</li>
                                <li><code>this</code> → الـ Object الحالي</li>
                                <li><code>extends</code> → الوراثة</li>
                                <li><code>super</code> → الوصول للأب</li>
                                <li><code>@Override</code> → إعادة تعريف method</li>
                                <li><code>private/public/protected</code> → Access Modifiers</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item 3: Data Structures -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">🗃️</span>
                    <span class="accordion-title">Data Structures Implementation (هياكل البيانات)</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- Introduction -->
                    <div class="topic-section">
                        <h3 class="topic-title">🗃️ ما هي هياكل البيانات؟</h3>
                        <div class="topic-content">
                            <p><strong>Data Structure</strong> هي طريقة لتنظيم وتخزين البيانات بشكل يسمح لنا بالوصول إليها وتعديلها بكفاءة. في هذا القسم، سنتعلم كيفية تنفيذ أهم 4 هياكل بيانات من الصفر!</p>
                            
                            <h4>📚 الهياكل التي سنتعلمها:</h4>
                            <ul class="topic-list">
                                <li><strong>LinkedList:</strong> قائمة مترابطة بالعناصر</li>
                                <li><strong>Stack:</strong> مكدس (LIFO - آخر داخل أول خارج)</li>
                                <li><strong>Queue:</strong> طابور (FIFO - أول داخل أول خارج)</li>
                                <li><strong>Tree:</strong> شجرة (بنية هرمية)</li>
                            </ul>
                            
                            <p style="margin-top: 1.5rem; padding: 1rem; background: rgba(102, 126, 234, 0.15); border-radius: 8px; border-left: 4px solid #667eea;">
                                💡 <strong>ملاحظة:</strong> كل هيكل سنتعلمه بطريقتين - باستخدام Array وباستخدام Nodes. اختر الهيكل من الأزرار أدناه!
                            </p>
                        </div>
                    </div>

                    <!-- Data Structure Selector -->
                    <div class="topic-section" style="background: linear-gradient(135deg, rgba(102, 126, 234, 0.2), rgba(118, 75, 162, 0.2)); border-left: 4px solid #764ba2;">
                        <h3 class="topic-title">🎯 اختر الهيكل لعرض التنفيذ:</h3>
                        <div class="ds-selector">
                            <button class="ds-button active" onclick="selectDataStructure('linkedlist')">
                                🔗 LinkedList
                            </button>
                            <button class="ds-button" onclick="selectDataStructure('stack')">
                                📚 Stack
                            </button>
                            <button class="ds-button" onclick="selectDataStructure('queue')">
                                🚶 Queue
                            </button>
                            <button class="ds-button" onclick="selectDataStructure('tree')">
                                🌳 Tree
                            </button>
                            <button class="ds-button" onclick="selectDataStructure('jcf')">
                                📦 JCF (Built-in)
                            </button>
                        </div>
                    </div>

                    <!-- LinkedList Content -->
                    <div id="ds-linkedlist" class="ds-content active">
                        
                        <!-- LinkedList Introduction -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔗 LinkedList (القائمة المترابطة)</h3>
                            <div class="topic-content">
                                <p><strong>ما هي LinkedList؟</strong> هي data structure تتكون من سلسلة من العقد (Nodes)، حيث كل عقدة تحتوي على بيانات ورابط للعقدة التالية.</p>
                                
                                <h4>🔍 الفرق بين Array و LinkedList:</h4>
                                <div class="code-block">
                                    <pre>
Array:
  [10][20][30][40][50]  ← عناصر متجاورة في الذاكرة
  الوصول: سريع O(1)
  الإضافة/الحذف من الوسط: بطيء O(n)

LinkedList:
  [10]→[20]→[30]→[40]→[50]→null  ← عناصر منفصلة مترابطة بالروابط
  الوصول: بطيء O(n)
  الإضافة/الحذف: سريع O(1)
                                    </pre>
                                </div>
                                
                                <p style="margin-top: 1rem; padding: 0.8rem; background: rgba(102, 126, 234, 0.15); border-radius: 6px;">
                                    💡 سنتعلم تنفيذ LinkedList بطريقتين: باستخدام Array وباستخدام Nodes. استخدم الأزرار للتبديل!
                                </p>
                            </div>
                        </div>

                        <!-- Implementation Tabs -->
                        <div class="implementation-tabs">
                            <button class="tab-button active" onclick="switchImplementation('linkedlist', 'array')">
                                📦 Array-based
                            </button>
                            <button class="tab-button" onclick="switchImplementation('linkedlist', 'node')">
                                🔗 Node-based
                            </button>
                        </div>

                        <!-- Array-based LinkedList -->
                        <div id="linkedlist-array" class="tab-content active">
                            <div class="topic-section">
                                <h3 class="topic-title">📦 LinkedList باستخدام Array</h3>
                                <div class="topic-content">
                                    <p>تنفيذ مبسط لـ LinkedList باستخدام Array عادي. مفيد للفهم الأولي!</p>
                                    
                                    <h4>Implementation كامل:</h4>
                                    <div class="code-block">
                                        <pre>
public class ArrayLinkedList {
    private int[] data;      // المصفوفة لتخزين البيانات
    private int size;        // عدد العناصر الحالية
    private int capacity;    // الحجم الأقصى
    
    // Constructor
    public ArrayLinkedList(int capacity) {
        this.capacity = capacity;
        this.data = new int[capacity];
        this.size = 0;
    }
    
    // ✅ إضافة عنصر في النهاية
    public void add(int value) {
        if (size >= capacity) {
            System.out.println("القائمة ممتلئة!");
            return;
        }
        data[size] = value;
        size++;
        System.out.println("تم إضافة: " + value);
    }
    
    // ✅ إضافة عنصر في موضع محدد
    public void addAt(int index, int value) {
        if (index < 0 || index > size) {
            System.out.println("Index خارج الحدود!");
            return;
        }
        if (size >= capacity) {
            System.out.println("القائمة ممتلئة!");
            return;
        }
        
        // تحريك العناصر لليمين
        for (int i = size; i > index; i--) {
            data[i] = data[i - 1];
        }
        data[index] = value;
        size++;
        System.out.println("تم إضافة " + value + " في الموضع " + index);
    }
    
    // ❌ حذف عنصر من موضع محدد
    public void remove(int index) {
        if (index < 0 || index >= size) {
            System.out.println("Index خارج الحدود!");
            return;
        }
        
        int removed = data[index];
        // تحريك العناصر لليسار
        for (int i = index; i < size - 1; i++) {
            data[i] = data[i + 1];
        }
        size--;
        System.out.println("تم حذف: " + removed);
    }
    
    // 📥 الحصول على عنصر
    public int get(int index) {
        if (index < 0 || index >= size) {
            System.out.println("Index خارج الحدود!");
            return -1;
        }
        return data[index];
    }
    
    // 📏 معرفة الحجم
    public int size() {
        return size;
    }
    
    // 🔍 البحث عن عنصر
    public int indexOf(int value) {
        for (int i = 0; i < size; i++) {
            if (data[i] == value) {
                return i;
            }
        }
        return -1;  // غير موجود
    }
    
    // 🔄 عكس القائمة
    public void reverse() {
        int left = 0;
        int right = size - 1;
        while (left < right) {
            int temp = data[left];
            data[left] = data[right];
            data[right] = temp;
            left++;
            right--;
        }
        System.out.println("تم عكس القائمة");
    }
    
    // 📺 عرض القائمة
    public void display() {
        if (size == 0) {
            System.out.println("القائمة فارغة");
            return;
        }
        System.out.print("[");
        for (int i = 0; i < size; i++) {
            System.out.print(data[i]);
            if (i < size - 1) System.out.print(" → ");
        }
        System.out.println("]");
    }
}
                                        </pre>
                                    </div>
                                    
                                    <h4>مثال الاستخدام:</h4>
                                    <div class="code-block">
                                        <pre>
public class TestArrayLinkedList {
    public static void main(String[] args) {
        ArrayLinkedList list = new ArrayLinkedList(10);
        
        // إضافة عناصر
        list.add(10);        // [10]
        list.add(20);        // [10 → 20]
        list.add(30);        // [10 → 20 → 30]
        list.display();      // [10 → 20 → 30]
        
        // إضافة في موضع محدد
        list.addAt(1, 15);   // [10 → 15 → 20 → 30]
        list.display();
        
        // البحث
        int index = list.indexOf(20);
        System.out.println("موضع 20: " + index);  // 2
        
        // الحصول على عنصر
        int value = list.get(2);
        System.out.println("العنصر في الموضع 2: " + value);  // 20
        
        // حذف
        list.remove(1);      // [10 → 20 → 30]
        list.display();
        
        // عكس
        list.reverse();      // [30 → 20 → 10]
        list.display();
        
        // الحجم
        System.out.println("الحجم: " + list.size());  // 3
    }
}

/* Output:
تم إضافة: 10
تم إضافة: 20
تم إضافة: 30
[10 → 20 → 30]
تم إضافة 15 في الموضع 1
[10 → 15 → 20 → 30]
موضع 20: 2
العنصر في الموضع 2: 20
تم حذف: 15
[10 → 20 → 30]
تم عكس القائمة
[30 → 20 → 10]
الحجم: 3
*/
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Node-based LinkedList -->
                        <div id="linkedlist-node" class="tab-content">
                            <div class="topic-section">
                                <h3 class="topic-title">🔗 LinkedList باستخدام Nodes</h3>
                                <div class="topic-content">
                                    <p>التنفيذ الحقيقي لـ LinkedList باستخدام العقد (Nodes). هذا هو الأسلوب المستخدم فعلياً في Java!</p>
                                    
                                    <h4>فهم الـ Node:</h4>
                                    <div class="code-block">
                                        <pre>
Node → [البيانات | الرابط للتالي]

مثال:
Head → [10|•]→[20|•]→[30|null]
       └─────┘ └─────┘ └──────┘
       Node 1  Node 2  Node 3 (آخر عقدة تشير لـ null)
                                        </pre>
                                    </div>
                                    
                                    <h4>Implementation كامل:</h4>
                                    <div class="code-block">
                                        <pre>
// تعريف الـ Node
class Node {
    int data;        // البيانات
    Node next;       // الرابط للعقدة التالية
    
    // Constructor
    public Node(int data) {
        this.data = data;
        this.next = null;
    }
}

// تعريف الـ LinkedList
public class LinkedList {
    private Node head;  // أول عقدة
    private int size;   // عدد العقد
    
    // Constructor
    public LinkedList() {
        this.head = null;
        this.size = 0;
    }
    
    // ✅ إضافة في البداية (O(1) - سريع!)
    public void insertFirst(int value) {
        Node newNode = new Node(value);
        newNode.next = head;  // الجديد يشير للـ head القديم
        head = newNode;       // الجديد يصبح head
        size++;
        System.out.println("تم إضافة " + value + " في البداية");
    }
    
    // ✅ إضافة في النهاية
    public void insertLast(int value) {
        Node newNode = new Node(value);
        
        // لو القائمة فارغة
        if (head == null) {
            head = newNode;
            size++;
            return;
        }
        
        // نمشي للآخر
        Node current = head;
        while (current.next != null) {
            current = current.next;
        }
        current.next = newNode;
        size++;
        System.out.println("تم إضافة " + value + " في النهاية");
    }
    
    // ✅ إضافة في موضع محدد
    public void insertAt(int index, int value) {
        if (index < 0 || index > size) {
            System.out.println("Index خارج الحدود!");
            return;
        }
        
        // لو الموضع 0، نضيف في البداية
        if (index == 0) {
            insertFirst(value);
            return;
        }
        
        Node newNode = new Node(value);
        Node current = head;
        
        // نمشي للعقدة قبل الموضع المطلوب
        for (int i = 0; i < index - 1; i++) {
            current = current.next;
        }
        
        newNode.next = current.next;
        current.next = newNode;
        size++;
        System.out.println("تم إضافة " + value + " في الموضع " + index);
    }
    
    // ❌ حذف من البداية
    public void deleteFirst() {
        if (head == null) {
            System.out.println("القائمة فارغة!");
            return;
        }
        int deleted = head.data;
        head = head.next;
        size--;
        System.out.println("تم حذف: " + deleted);
    }
    
    // ❌ حذف من النهاية
    public void deleteLast() {
        if (head == null) {
            System.out.println("القائمة فارغة!");
            return;
        }
        
        // لو فيه عقدة واحدة فقط
        if (head.next == null) {
            int deleted = head.data;
            head = null;
            size--;
            System.out.println("تم حذف: " + deleted);
            return;
        }
        
        // نمشي لما قبل الأخير
        Node current = head;
        while (current.next.next != null) {
            current = current.next;
        }
        int deleted = current.next.data;
        current.next = null;
        size--;
        System.out.println("تم حذف: " + deleted);
    }
    
    // ❌ حذف قيمة محددة
    public void delete(int value) {
        if (head == null) {
            System.out.println("القائمة فارغة!");
            return;
        }
        
        // لو العنصر المطلوب في البداية
        if (head.data == value) {
            deleteFirst();
            return;
        }
        
        Node current = head;
        while (current.next != null) {
            if (current.next.data == value) {
                current.next = current.next.next;
                size--;
                System.out.println("تم حذف: " + value);
                return;
            }
            current = current.next;
        }
        System.out.println(value + " غير موجود!");
    }
    
    // 🔍 البحث عن عنصر
    public boolean search(int value) {
        Node current = head;
        int position = 0;
        
        while (current != null) {
            if (current.data == value) {
                System.out.println(value + " موجود في الموضع " + position);
                return true;
            }
            current = current.next;
            position++;
        }
        System.out.println(value + " غير موجود");
        return false;
    }
    
    // 📥 الحصول على عنصر بالـ index
    public int get(int index) {
        if (index < 0 || index >= size) {
            System.out.println("Index خارج الحدود!");
            return -1;
        }
        
        Node current = head;
        for (int i = 0; i < index; i++) {
            current = current.next;
        }
        return current.data;
    }
    
    // 🔄 عكس القائمة
    public void reverse() {
        Node prev = null;
        Node current = head;
        Node next = null;
        
        while (current != null) {
            next = current.next;    // حفظ التالي
            current.next = prev;    // عكس الاتجاه
            prev = current;         // التقدم
            current = next;
        }
        head = prev;
        System.out.println("تم عكس القائمة");
    }
    
    // 📏 الحجم
    public int size() {
        return size;
    }
    
    // 📺 عرض القائمة
    public void display() {
        if (head == null) {
            System.out.println("القائمة فارغة");
            return;
        }
        
        Node current = head;
        System.out.print("[");
        while (current != null) {
            System.out.print(current.data);
            if (current.next != null) System.out.print(" → ");
            current = current.next;
        }
        System.out.println(" → null]");
    }
}
                                        </pre>
                                    </div>
                                    
                                    <h4>مثال الاستخدام:</h4>
                                    <div class="code-block">
                                        <pre>
public class TestLinkedList {
    public static void main(String[] args) {
        LinkedList list = new LinkedList();
        
        // إضافة في النهاية
        list.insertLast(10);    // [10 → null]
        list.insertLast(20);    // [10 → 20 → null]
        list.insertLast(30);    // [10 → 20 → 30 → null]
        list.display();
        
        // إضافة في البداية
        list.insertFirst(5);    // [5 → 10 → 20 → 30 → null]
        list.display();
        
        // إضافة في موضع محدد
        list.insertAt(2, 15);   // [5 → 10 → 15 → 20 → 30 → null]
        list.display();
        
        // البحث
        list.search(15);        // 15 موجود في الموضع 2
        list.search(100);       // 100 غير موجود
        
        // الحصول على عنصر
        int value = list.get(3);
        System.out.println("العنصر في الموضع 3: " + value);  // 20
        
        // الحذف
        list.delete(15);        // [5 → 10 → 20 → 30 → null]
        list.display();
        
        list.deleteFirst();     // [10 → 20 → 30 → null]
        list.display();
        
        list.deleteLast();      // [10 → 20 → null]
        list.display();
        
        // العكس
        list.reverse();         // [20 → 10 → null]
        list.display();
        
        // الحجم
        System.out.println("الحجم: " + list.size());  // 2
    }
}

/* Output:
[10 → null]
[10 → 20 → null]
[10 → 20 → 30 → null]
تم إضافة 5 في البداية
[5 → 10 → 20 → 30 → null]
تم إضافة 15 في الموضع 2
[5 → 10 → 15 → 20 → 30 → null]
15 موجود في الموضع 2
100 غير موجود
تم حذف: 15
[5 → 10 → 20 → 30 → null]
تم حذف: 5
[10 → 20 → 30 → null]
تم حذف: 30
[10 → 20 → null]
تم عكس القائمة
[20 → 10 → null]
الحجم: 2
*/
                                        </pre>
                                    </div>
                                    
                                    <h4>📋 ملخص Methods:</h4>
                                    <div class="terminal-table-container">
                                        <table class="terminal-table">
                                            <thead>
                                                <tr>
                                                    <th>Method</th>
                                                    <th>الوظيفة</th>
                                                    <th>Complexity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>insertFirst(value)</td>
                                                    <td>إضافة في البداية</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>insertLast(value)</td>
                                                    <td>إضافة في النهاية</td>
                                                    <td>O(n)</td>
                                                </tr>
                                                <tr>
                                                    <td>insertAt(index, value)</td>
                                                    <td>إضافة في موضع</td>
                                                    <td>O(n)</td>
                                                </tr>
                                                <tr>
                                                    <td>deleteFirst()</td>
                                                    <td>حذف من البداية</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>deleteLast()</td>
                                                    <td>حذف من النهاية</td>
                                                    <td>O(n)</td>
                                                </tr>
                                                <tr>
                                                    <td>delete(value)</td>
                                                    <td>حذف قيمة محددة</td>
                                                    <td>O(n)</td>
                                                </tr>
                                                <tr>
                                                    <td>search(value)</td>
                                                    <td>البحث</td>
                                                    <td>O(n)</td>
                                                </tr>
                                                <tr>
                                                    <td>get(index)</td>
                                                    <td>الحصول على عنصر</td>
                                                    <td>O(n)</td>
                                                </tr>
                                                <tr>
                                                    <td>reverse()</td>
                                                    <td>عكس القائمة</td>
                                                    <td>O(n)</td>
                                                </tr>
                                                <tr>
                                                    <td>display()</td>
                                                    <td>عرض القائمة</td>
                                                    <td>O(n)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End ds-linkedlist -->

                    <!-- Stack Content -->
                    <div id="ds-stack" class="ds-content">
                        
                        <div class="topic-section">
                            <h3 class="topic-title">📚 Stack (المكدس)</h3>
                            <div class="topic-content">
                                <p><strong>ما هو Stack؟</strong> هو data structure يعمل بمبدأ <strong>LIFO</strong> (Last In, First Out) - آخر عنصر دخل هو أول عنصر يخرج. مثل كومة صحون!</p>
                                
                                <h4>🔍 تخيل Stack:</h4>
                                <div class="code-block">
                                    <pre>
    ┌─────┐
    │  3  │  ← آخر داخل (Top) - أول يخرج
    ├─────┤
    │  2  │
    ├─────┤
    │  1  │  ← أول داخل (Bottom) - آخر يخرج
    └─────┘

العمليات الأساسية:
• push(value) → إضافة للقمة
• pop()       → حذف وإرجاع القمة
• peek()      → رؤية القمة بدون حذف
• isEmpty()   → هل فارغ؟
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <div class="implementation-tabs">
                            <button class="tab-button active" onclick="switchImplementation('stack', 'array')">
                                📦 Array-based
                            </button>
                            <button class="tab-button" onclick="switchImplementation('stack', 'node')">
                                🔗 Node-based
                            </button>
                        </div>

                        <!-- Array-based Stack -->
                        <div id="stack-array" class="tab-content active">
                            <div class="topic-section">
                                <h3 class="topic-title">📦 Stack باستخدام Array</h3>
                                <div class="topic-content">
                                    <div class="code-block">
                                        <pre>
public class ArrayStack {
    private int[] stack;
    private int top;
    private int capacity;
    
    // Constructor
    public ArrayStack(int capacity) {
        this.capacity = capacity;
        this.stack = new int[capacity];
        this.top = -1;  // Stack فارغ
    }
    
    // ✅ Push - إضافة عنصر للقمة
    public void push(int value) {
        if (isFull()) {
            System.out.println("Stack ممتلئ!");
            return;
        }
        top++;
        stack[top] = value;
        System.out.println("تم إضافة: " + value);
    }
    
    // ❌ Pop - حذف وإرجاع القمة
    public int pop() {
        if (isEmpty()) {
            System.out.println("Stack فارغ!");
            return -1;
        }
        int value = stack[top];
        top--;
        System.out.println("تم حذف: " + value);
        return value;
    }
    
    // 👁️ Peek - رؤية القمة بدون حذف
    public int peek() {
        if (isEmpty()) {
            System.out.println("Stack فارغ!");
            return -1;
        }
        return stack[top];
    }
    
    // 📊 isEmpty - هل فارغ؟
    public boolean isEmpty() {
        return top == -1;
    }
    
    // 📊 isFull - هل ممتلئ؟
    public boolean isFull() {
        return top == capacity - 1;
    }
    
    // 📏 Size - الحجم الحالي
    public int size() {
        return top + 1;
    }
    
    // 📺 Display - عرض Stack
    public void display() {
        if (isEmpty()) {
            System.out.println("Stack فارغ");
            return;
        }
        System.out.println("--- Stack (من القمة للقاع) ---");
        for (int i = top; i >= 0; i--) {
            System.out.println("| " + stack[i] + " |" + (i == top ? " ← Top" : ""));
        }
        System.out.println("└───┘");
    }
}

// الاستخدام
public class TestStack {
    public static void main(String[] args) {
        ArrayStack stack = new ArrayStack(5);
        
        stack.push(10);  // [10]
        stack.push(20);  // [10, 20]
        stack.push(30);  // [10, 20, 30]
        stack.display();
        
        System.out.println("القمة: " + stack.peek());  // 30
        
        stack.pop();     // حذف 30
        stack.display(); // [10, 20]
        
        System.out.println("الحجم: " + stack.size());  // 2
    }
}
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Node-based Stack -->
                        <div id="stack-node" class="tab-content">
                            <div class="topic-section">
                                <h3 class="topic-title">🔗 Stack باستخدام Nodes</h3>
                                <div class="topic-content">
                                    <div class="code-block">
                                        <pre>
class StackNode {
    int data;
    StackNode next;
    
    public StackNode(int data) {
        this.data = data;
        this.next = null;
    }
}

public class LinkedStack {
    private StackNode top;
    private int size;
    
    public LinkedStack() {
        this.top = null;
        this.size = 0;
    }
    
    // ✅ Push - إضافة للقمة O(1)
    public void push(int value) {
        StackNode newNode = new StackNode(value);
        newNode.next = top;
        top = newNode;
        size++;
        System.out.println("تم إضافة: " + value);
    }
    
    // ❌ Pop - حذف من القمة O(1)
    public int pop() {
        if (isEmpty()) {
            System.out.println("Stack فارغ!");
            return -1;
        }
        int value = top.data;
        top = top.next;
        size--;
        System.out.println("تم حذف: " + value);
        return value;
    }
    
    // 👁️ Peek - رؤية القمة
    public int peek() {
        if (isEmpty()) return -1;
        return top.data;
    }
    
    // 📊 isEmpty
    public boolean isEmpty() {
        return top == null;
    }
    
    // 📏 Size
    public int size() {
        return size;
    }
    
    // 📺 Display
    public void display() {
        if (isEmpty()) {
            System.out.println("Stack فارغ");
            return;
        }
        StackNode current = top;
        System.out.print("Top → ");
        while (current != null) {
            System.out.print("[" + current.data + "]");
            if (current.next != null) System.out.print(" → ");
            current = current.next;
        }
        System.out.println(" → null");
    }
}
                                        </pre>
                                    </div>
                                    
                                    <h4>📋 ملخص Methods:</h4>
                                    <div class="terminal-table-container">
                                        <table class="terminal-table">
                                            <thead>
                                                <tr>
                                                    <th>Method</th>
                                                    <th>الوظيفة</th>
                                                    <th>Complexity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>push(value)</td>
                                                    <td>إضافة للقمة</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>pop()</td>
                                                    <td>حذف من القمة</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>peek()</td>
                                                    <td>رؤية القمة</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>isEmpty()</td>
                                                    <td>تحقق من الفراغ</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>size()</td>
                                                    <td>الحجم</td>
                                                    <td>O(1)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End ds-stack -->

                    <!-- Queue Content -->
                    <div id="ds-queue" class="ds-content">
                        
                        <div class="topic-section">
                            <h3 class="topic-title">🚶 Queue (الطابور)</h3>
                            <div class="topic-content">
                                <p><strong>ما هو Queue؟</strong> هو data structure يعمل بمبدأ <strong>FIFO</strong> (First In, First Out) - أول عنصر دخل هو أول عنصر يخرج. مثل طابور البنك!</p>
                                
                                <h4>🔍 تخيل Queue:</h4>
                                <div class="code-block">
                                    <pre>
Front                              Rear
  ↓                                  ↓
┌───┬───┬───┬───┐
│ 1 │ 2 │ 3 │ 4 │  ← enqueue (إضافة من هنا)
└───┴───┴───┴───┘
  ↑
dequeue (خروج من هنا)

العمليات الأساسية:
• enqueue(value) → إضافة للنهاية
• dequeue()      → حذف من البداية
• front()        → رؤية أول عنصر
• isEmpty()      → هل فارغ؟
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <div class="implementation-tabs">
                            <button class="tab-button active" onclick="switchImplementation('queue', 'array')">
                                📦 Array-based
                            </button>
                            <button class="tab-button" onclick="switchImplementation('queue', 'node')">
                                🔗 Node-based
                            </button>
                        </div>

                        <!-- Array-based Queue -->
                        <div id="queue-array" class="tab-content active">
                            <div class="topic-section">
                                <h3 class="topic-title">📦 Queue باستخدام Array (Circular Queue)</h3>
                                <div class="topic-content">
                                    <div class="code-block">
                                        <pre>
public class ArrayQueue {
    private int[] queue;
    private int front, rear, size, capacity;
    
    public ArrayQueue(int capacity) {
        this.capacity = capacity;
        this.queue = new int[capacity];
        this.front = 0;
        this.rear = -1;
        this.size = 0;
    }
    
    // ✅ Enqueue - إضافة للنهاية
    public void enqueue(int value) {
        if (isFull()) {
            System.out.println("Queue ممتلئ!");
            return;
        }
        rear = (rear + 1) % capacity;  // Circular
        queue[rear] = value;
        size++;
        System.out.println("تم إضافة: " + value);
    }
    
    // ❌ Dequeue - حذف من البداية
    public int dequeue() {
        if (isEmpty()) {
            System.out.println("Queue فارغ!");
            return -1;
        }
        int value = queue[front];
        front = (front + 1) % capacity;  // Circular
        size--;
        System.out.println("تم حذف: " + value);
        return value;
    }
    
    // 👁️ Front - رؤية أول عنصر
    public int front() {
        if (isEmpty()) return -1;
        return queue[front];
    }
    
    // 👁️ Rear - رؤية آخر عنصر
    public int rear() {
        if (isEmpty()) return -1;
        return queue[rear];
    }
    
    public boolean isEmpty() { return size == 0; }
    public boolean isFull() { return size == capacity; }
    public int size() { return size; }
    
    public void display() {
        if (isEmpty()) {
            System.out.println("Queue فارغ");
            return;
        }
        System.out.print("Front → ");
        int index = front;
        for (int i = 0; i < size; i++) {
            System.out.print("[" + queue[index] + "]");
            if (i < size - 1) System.out.print(" → ");
            index = (index + 1) % capacity;
        }
        System.out.println(" ← Rear");
    }
}
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Node-based Queue -->
                        <div id="queue-node" class="tab-content">
                            <div class="topic-section">
                                <h3 class="topic-title">🔗 Queue باستخدام Nodes</h3>
                                <div class="topic-content">
                                    <div class="code-block">
                                        <pre>
class QueueNode {
    int data;
    QueueNode next;
    
    public QueueNode(int data) {
        this.data = data;
        this.next = null;
    }
}

public class LinkedQueue {
    private QueueNode front, rear;
    private int size;
    
    public LinkedQueue() {
        this.front = this.rear = null;
        this.size = 0;
    }
    
    // ✅ Enqueue - إضافة للنهاية O(1)
    public void enqueue(int value) {
        QueueNode newNode = new QueueNode(value);
        
        if (isEmpty()) {
            front = rear = newNode;
        } else {
            rear.next = newNode;
            rear = newNode;
        }
        size++;
        System.out.println("تم إضافة: " + value);
    }
    
    // ❌ Dequeue - حذف من البداية O(1)
    public int dequeue() {
        if (isEmpty()) {
            System.out.println("Queue فارغ!");
            return -1;
        }
        int value = front.data;
        front = front.next;
        if (front == null) rear = null;
        size--;
        System.out.println("تم حذف: " + value);
        return value;
    }
    
    public int front() {
        if (isEmpty()) return -1;
        return front.data;
    }
    
    public boolean isEmpty() { return front == null; }
    public int size() { return size; }
    
    public void display() {
        if (isEmpty()) {
            System.out.println("Queue فارغ");
            return;
        }
        QueueNode current = front;
        System.out.print("Front → ");
        while (current != null) {
            System.out.print("[" + current.data + "]");
            if (current.next != null) System.out.print(" → ");
            current = current.next;
        }
        System.out.println(" ← Rear");
    }
}
                                        </pre>
                                    </div>
                                    
                                    <h4>📋 ملخص Methods:</h4>
                                    <div class="terminal-table-container">
                                        <table class="terminal-table">
                                            <thead>
                                                <tr>
                                                    <th>Method</th>
                                                    <th>الوظيفة</th>
                                                    <th>Complexity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>enqueue(value)</td>
                                                    <td>إضافة للنهاية</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>dequeue()</td>
                                                    <td>حذف من البداية</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>front()</td>
                                                    <td>رؤية أول عنصر</td>
                                                    <td>O(1)</td>
                                                </tr>
                                                <tr>
                                                    <td>isEmpty()</td>
                                                    <td>تحقق من الفراغ</td>
                                                    <td>O(1)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End ds-queue -->

                    <!-- Tree Content -->
                    <div id="ds-tree" class="ds-content">
                        
                        <div class="topic-section">
                            <h3 class="topic-title">🌳 Binary Tree (الشجرة الثنائية)</h3>
                            <div class="topic-content">
                                <p><strong>ما هي Binary Tree؟</strong> هي data structure هرمية حيث كل عقدة لها على الأكثر طفلين (left و right).</p>
                                
                                <h4>🔍 تخيل Binary Search Tree:</h4>
                                <div class="code-block">
                                    <pre>
           [50]          ← Root (الجذر)
          /    \
       [30]    [70]      ← Children (أبناء)
       /  \    /  \
    [20] [40][60] [80]   ← Leaves (أوراق)

المصطلحات:
• Root: أول عقدة (الجذر)
• Parent: عقدة لها أبناء
• Child: عقدة تحت عقدة أخرى
• Leaf: عقدة بدون أبناء
• BST: القيم الأصغر يسار، الأكبر يمين
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <div class="topic-section">
                            <h3 class="topic-title">🌳 Binary Search Tree Implementation</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
class TreeNode {
    int data;
    TreeNode left, right;
    
    public TreeNode(int data) {
        this.data = data;
        this.left = this.right = null;
    }
}

public class BinarySearchTree {
    private TreeNode root;
    
    public BinarySearchTree() {
        this.root = null;
    }
    
    // ✅ Insert - إدراج عنصر
    public void insert(int value) {
        root = insertRec(root, value);
        System.out.println("تم إدراج: " + value);
    }
    
    private TreeNode insertRec(TreeNode node, int value) {
        if (node == null) {
            return new TreeNode(value);
        }
        if (value < node.data) {
            node.left = insertRec(node.left, value);
        } else if (value > node.data) {
            node.right = insertRec(node.right, value);
        }
        return node;
    }
    
    // 🔍 Search - البحث عن عنصر
    public boolean search(int value) {
        return searchRec(root, value);
    }
    
    private boolean searchRec(TreeNode node, int value) {
        if (node == null) return false;
        if (node.data == value) return true;
        if (value < node.data) return searchRec(node.left, value);
        return searchRec(node.right, value);
    }
    
    // 📊 Traversal Methods
    
    // In-Order: Left → Root → Right (ترتيب تصاعدي)
    public void inOrder() {
        System.out.print("In-Order: ");
        inOrderRec(root);
        System.out.println();
    }
    
    private void inOrderRec(TreeNode node) {
        if (node != null) {
            inOrderRec(node.left);
            System.out.print(node.data + " ");
            inOrderRec(node.right);
        }
    }
    
    // Pre-Order: Root → Left → Right
    public void preOrder() {
        System.out.print("Pre-Order: ");
        preOrderRec(root);
        System.out.println();
    }
    
    private void preOrderRec(TreeNode node) {
        if (node != null) {
            System.out.print(node.data + " ");
            preOrderRec(node.left);
            preOrderRec(node.right);
        }
    }
    
    // Post-Order: Left → Right → Root
    public void postOrder() {
        System.out.print("Post-Order: ");
        postOrderRec(root);
        System.out.println();
    }
    
    private void postOrderRec(TreeNode node) {
        if (node != null) {
            postOrderRec(node.left);
            postOrderRec(node.right);
            System.out.print(node.data + " ");
        }
    }
}

// الاستخدام
public class TestTree {
    public static void main(String[] args) {
        BinarySearchTree bst = new BinarySearchTree();
        
        bst.insert(50);
        bst.insert(30);
        bst.insert(70);
        bst.insert(20);
        bst.insert(40);
        bst.insert(60);
        bst.insert(80);
        
        bst.inOrder();   // 20 30 40 50 60 70 80
        bst.preOrder();  // 50 30 20 40 70 60 80
        bst.postOrder(); // 20 40 30 60 80 70 50
        
        System.out.println("هل 40 موجود؟ " + bst.search(40));  // true
        System.out.println("هل 100 موجود؟ " + bst.search(100)); // false
    }
}
                                    </pre>
                                </div>
                                
                                <h4>📋 ملخص Traversal Methods:</h4>
                                <div class="terminal-table-container">
                                    <table class="terminal-table">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>Order</th>
                                                <th>الاستخدام</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>inOrder()</td>
                                                <td>Left → Root → Right</td>
                                                <td>ترتيب تصاعدي</td>
                                            </tr>
                                            <tr>
                                                <td>preOrder()</td>
                                                <td>Root → Left → Right</td>
                                                <td>نسخ الشجرة</td>
                                            </tr>
                                            <tr>
                                                <td>postOrder()</td>
                                                <td>Left → Right → Root</td>
                                                <td>حذف الشجرة</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End ds-tree -->

                    <!-- JCF (Java Collection Framework) Content -->
                    <div id="ds-jcf" class="ds-content">
                        
                        <div class="topic-section">
                            <h3 class="topic-title">📦 Java Collection Framework (JCF)</h3>
                            <div class="topic-content">
                                <p><strong>ما هو JCF؟</strong> هو إطار عمل جاهز في Java يوفر لنا data structures جاهزة للاستخدام مباشرة. كل اللي محتاج تعمله هو import واستخدام!</p>
                                
                                <h4>📚 الاستيراد:</h4>
                                <div class="code-block">
                                    <pre>
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.Stack;
import java.util.Queue;
import java.util.HashMap;
import java.util.HashSet;
import java.util.TreeMap;
import java.util.TreeSet;

// أو استيراد الكل:
import java.util.*;
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- ArrayList -->
                        <div class="topic-section">
                            <h3 class="topic-title">📋 ArrayList (القائمة الديناميكية)</h3>
                            <div class="topic-content">
                                <p><strong>ما هي؟</strong> مصفوفة ديناميكية حجمها يتغير تلقائياً. أفضل للوصول السريع بالـ index.</p>
                                
                                <div class="code-block">
                                    <pre>
ArrayList&lt;String&gt; names = new ArrayList&lt;&gt;();

// ═══════════════════════════════════════════
// 🔹 الإضافة
// ═══════════════════════════════════════════
names.add("أحمد");              // إضافة للنهاية
names.add(0, "محمد");           // إضافة في index محدد
names.addAll(otherList);        // إضافة قائمة كاملة

// ═══════════════════════════════════════════
// 🔹 القراءة
// ═══════════════════════════════════════════
String first = names.get(0);    // الحصول على عنصر
int size = names.size();        // الحجم
boolean empty = names.isEmpty(); // هل فارغة؟

// ═══════════════════════════════════════════
// 🔹 التعديل
// ═══════════════════════════════════════════
names.set(0, "علي");            // تغيير عنصر

// ═══════════════════════════════════════════
// 🔹 الحذف
// ═══════════════════════════════════════════
names.remove(0);                // حذف بالـ index
names.remove("أحمد");           // حذف بالقيمة
names.clear();                  // حذف الكل

// ═══════════════════════════════════════════
// 🔹 البحث
// ═══════════════════════════════════════════
boolean exists = names.contains("أحمد");  // هل موجود؟
int index = names.indexOf("أحمد");        // موضعه
int lastIdx = names.lastIndexOf("أحمد");  // آخر ظهور

// ═══════════════════════════════════════════
// 🔹 التحويل
// ═══════════════════════════════════════════
String[] arr = names.toArray(new String[0]);  // لـ Array
List&lt;String&gt; sub = names.subList(0, 2);       // جزء من القائمة

// ═══════════════════════════════════════════
// 🔹 المرور (Loop)
// ═══════════════════════════════════════════
for (String name : names) {
    System.out.println(name);
}
names.forEach(n -&gt; System.out.println(n));
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- LinkedList Built-in -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔗 LinkedList (Built-in)</h3>
                            <div class="topic-content">
                                <p><strong>ما هي؟</strong> قائمة مترابطة. أفضل للإضافة/الحذف من البداية والنهاية.</p>
                                
                                <div class="code-block">
                                    <pre>
LinkedList&lt;Integer&gt; list = new LinkedList&lt;&gt;();

// ═══════════════════════════════════════════
// 🔹 إضافة خاصة بـ LinkedList
// ═══════════════════════════════════════════
list.addFirst(10);              // إضافة في البداية ⚡ O(1)
list.addLast(20);               // إضافة في النهاية ⚡ O(1)
list.add(1, 15);                // إضافة في موضع

// ═══════════════════════════════════════════
// 🔹 قراءة خاصة بـ LinkedList
// ═══════════════════════════════════════════
int first = list.getFirst();    // أول عنصر
int last = list.getLast();      // آخر عنصر
int peek = list.peek();         // مثل getFirst
int peekLast = list.peekLast(); // مثل getLast

// ═══════════════════════════════════════════
// 🔹 حذف خاص بـ LinkedList
// ═══════════════════════════════════════════
list.removeFirst();             // حذف الأول ⚡ O(1)
list.removeLast();              // حذف الأخير ⚡ O(1)
int polled = list.poll();       // حذف وإرجاع الأول
int polledLast = list.pollLast(); // حذف وإرجاع الأخير

// ═══════════════════════════════════════════
// 🔹 استخدام كـ Stack
// ═══════════════════════════════════════════
list.push(100);                 // مثل addFirst
int popped = list.pop();        // مثل removeFirst

// ═══════════════════════════════════════════
// 🔹 استخدام كـ Queue
// ═══════════════════════════════════════════
list.offer(200);                // مثل addLast
int removed = list.poll();      // مثل removeFirst
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Stack Built-in -->
                        <div class="topic-section">
                            <h3 class="topic-title">📚 Stack (Built-in)</h3>
                            <div class="topic-content">
                                <p><strong>ما هو؟</strong> مكدس جاهز يعمل بمبدأ LIFO.</p>
                                
                                <div class="code-block">
                                    <pre>
Stack&lt;String&gt; stack = new Stack&lt;&gt;();

// ═══════════════════════════════════════════
// 🔹 العمليات الأساسية
// ═══════════════════════════════════════════
stack.push("أول");              // إضافة للقمة
stack.push("ثاني");
stack.push("ثالث");             // ← Top

String top = stack.peek();      // رؤية القمة (ثالث)
String popped = stack.pop();    // حذف وإرجاع القمة (ثالث)

boolean empty = stack.isEmpty(); // هل فارغ؟
int size = stack.size();        // الحجم

// ═══════════════════════════════════════════
// 🔹 البحث
// ═══════════════════════════════════════════
int pos = stack.search("أول");  // المسافة من القمة (1-based)
                                // يرجع -1 لو مش موجود

// ═══════════════════════════════════════════
// 🔹 مثال عملي: التحقق من الأقواس
// ═══════════════════════════════════════════
public static boolean isValidParentheses(String s) {
    Stack&lt;Character&gt; stack = new Stack&lt;&gt;();
    
    for (char c : s.toCharArray()) {
        if (c == '(' || c == '[' || c == '{') {
            stack.push(c);
        } else {
            if (stack.isEmpty()) return false;
            char top = stack.pop();
            if (c == ')' &amp;&amp; top != '(') return false;
            if (c == ']' &amp;&amp; top != '[') return false;
            if (c == '}' &amp;&amp; top != '{') return false;
        }
    }
    return stack.isEmpty();
}
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Queue/Deque/PriorityQueue -->
                        <div class="topic-section">
                            <h3 class="topic-title">🚶 Queue / Deque / PriorityQueue</h3>
                            <div class="topic-content">
                                <h4>Queue (طابور عادي):</h4>
                                <div class="code-block">
                                    <pre>
Queue&lt;String&gt; queue = new LinkedList&lt;&gt;();

// ═══════════════════════════════════════════
// 🔹 العمليات الأساسية
// ═══════════════════════════════════════════
queue.offer("أول");             // إضافة (يرجع false لو فشل)
queue.add("ثاني");              // إضافة (يرمي exception لو فشل)

String front = queue.peek();    // رؤية الأول (بدون حذف)
String removed = queue.poll();  // حذف وإرجاع الأول
queue.remove();                 // حذف الأول (يرمي exception لو فارغ)

boolean empty = queue.isEmpty();
int size = queue.size();
                                    </pre>
                                </div>
                                
                                <h4>Deque (طابور من الطرفين):</h4>
                                <div class="code-block">
                                    <pre>
Deque&lt;Integer&gt; deque = new ArrayDeque&lt;&gt;();

// ═══════════════════════════════════════════
// 🔹 إضافة من الطرفين
// ═══════════════════════════════════════════
deque.addFirst(10);             // إضافة من البداية
deque.addLast(20);              // إضافة من النهاية
deque.offerFirst(5);            // إضافة من البداية (safe)
deque.offerLast(25);            // إضافة من النهاية (safe)

// ═══════════════════════════════════════════
// 🔹 قراءة من الطرفين
// ═══════════════════════════════════════════
int first = deque.peekFirst();
int last = deque.peekLast();

// ═══════════════════════════════════════════
// 🔹 حذف من الطرفين
// ═══════════════════════════════════════════
deque.pollFirst();
deque.pollLast();
                                    </pre>
                                </div>
                                
                                <h4>PriorityQueue (طابور بأولوية):</h4>
                                <div class="code-block">
                                    <pre>
// الأصغر يخرج أولاً (افتراضياً)
PriorityQueue&lt;Integer&gt; pq = new PriorityQueue&lt;&gt;();

pq.offer(30);
pq.offer(10);
pq.offer(20);

System.out.println(pq.poll());  // 10 (الأصغر)
System.out.println(pq.poll());  // 20
System.out.println(pq.poll());  // 30

// الأكبر يخرج أولاً
PriorityQueue&lt;Integer&gt; maxPQ = new PriorityQueue&lt;&gt;(Collections.reverseOrder());
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- HashMap -->
                        <div class="topic-section">
                            <h3 class="topic-title">🗺️ HashMap (جدول مفتاح-قيمة)</h3>
                            <div class="topic-content">
                                <p><strong>ما هو؟</strong> يخزن البيانات كأزواج (Key → Value). بحث سريع جداً O(1)!</p>
                                
                                <div class="code-block">
                                    <pre>
HashMap&lt;String, Integer&gt; ages = new HashMap&lt;&gt;();

// ═══════════════════════════════════════════
// 🔹 الإضافة والتعديل
// ═══════════════════════════════════════════
ages.put("أحمد", 20);           // إضافة
ages.put("سارة", 22);
ages.put("أحمد", 21);           // تحديث (نفس المفتاح)

ages.putIfAbsent("علي", 19);    // إضافة لو مش موجود

// ═══════════════════════════════════════════
// 🔹 القراءة
// ═══════════════════════════════════════════
int age = ages.get("أحمد");     // 21
int unknown = ages.getOrDefault("محمد", 0);  // 0 (مش موجود)

// ═══════════════════════════════════════════
// 🔹 التحقق
// ═══════════════════════════════════════════
boolean hasKey = ages.containsKey("أحمد");    // true
boolean hasVal = ages.containsValue(21);      // true
boolean empty = ages.isEmpty();
int size = ages.size();

// ═══════════════════════════════════════════
// 🔹 الحذف
// ═══════════════════════════════════════════
ages.remove("سارة");            // حذف بالمفتاح
ages.remove("أحمد", 21);        // حذف لو المفتاح والقيمة متطابقين
ages.clear();                   // حذف الكل

// ═══════════════════════════════════════════
// 🔹 المرور (Loop)
// ═══════════════════════════════════════════
// على المفاتيح
for (String name : ages.keySet()) {
    System.out.println(name);
}

// على القيم
for (int a : ages.values()) {
    System.out.println(a);
}

// على المفاتيح والقيم
for (var entry : ages.entrySet()) {
    System.out.println(entry.getKey() + ": " + entry.getValue());
}

ages.forEach((k, v) -&gt; System.out.println(k + " = " + v));

// ═══════════════════════════════════════════
// 🔹 عمليات متقدمة
// ═══════════════════════════════════════════
ages.replace("أحمد", 25);       // استبدال
ages.compute("أحمد", (k, v) -&gt; v + 1);  // تعديل بـ function
ages.merge("أحمد", 5, Integer::sum);    // دمج القيم
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- HashSet -->
                        <div class="topic-section">
                            <h3 class="topic-title">🎯 HashSet (مجموعة فريدة)</h3>
                            <div class="topic-content">
                                <p><strong>ما هو؟</strong> مجموعة لا تسمح بالتكرار. مثالي لإزالة التكرارات!</p>
                                
                                <div class="code-block">
                                    <pre>
HashSet&lt;String&gt; countries = new HashSet&lt;&gt;();

// ═══════════════════════════════════════════
// 🔹 الإضافة
// ═══════════════════════════════════════════
countries.add("مصر");           // true (تمت الإضافة)
countries.add("السعودية");
countries.add("مصر");           // false (موجود مسبقاً!)

countries.addAll(anotherSet);   // إضافة مجموعة

// ═══════════════════════════════════════════
// 🔹 التحقق
// ═══════════════════════════════════════════
boolean exists = countries.contains("مصر");  // true
boolean empty = countries.isEmpty();
int size = countries.size();                  // 2 (مش 3!)

// ═══════════════════════════════════════════
// 🔹 الحذف
// ═══════════════════════════════════════════
countries.remove("مصر");
countries.clear();

// ═══════════════════════════════════════════
// 🔹 عمليات المجموعات
// ═══════════════════════════════════════════
HashSet&lt;Integer&gt; set1 = new HashSet&lt;&gt;(Arrays.asList(1, 2, 3));
HashSet&lt;Integer&gt; set2 = new HashSet&lt;&gt;(Arrays.asList(2, 3, 4));

// Union (الاتحاد)
set1.addAll(set2);              // {1, 2, 3, 4}

// Intersection (التقاطع)
set1.retainAll(set2);           // {2, 3}

// Difference (الفرق)
set1.removeAll(set2);           // {1}

// ═══════════════════════════════════════════
// 🔹 تحويل من List وإزالة التكرار
// ═══════════════════════════════════════════
ArrayList&lt;Integer&gt; listWithDups = new ArrayList&lt;&gt;(
    Arrays.asList(1, 2, 2, 3, 3, 3)
);
HashSet&lt;Integer&gt; unique = new HashSet&lt;&gt;(listWithDups);
// unique = {1, 2, 3}
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- TreeMap/TreeSet -->
                        <div class="topic-section">
                            <h3 class="topic-title">🌲 TreeMap / TreeSet (مرتبة)</h3>
                            <div class="topic-content">
                                <p><strong>ما هي؟</strong> مثل HashMap/HashSet لكن العناصر مرتبة تلقائياً!</p>
                                
                                <h4>TreeMap:</h4>
                                <div class="code-block">
                                    <pre>
TreeMap&lt;String, Integer&gt; scores = new TreeMap&lt;&gt;();

scores.put("زيد", 90);
scores.put("أحمد", 85);
scores.put("محمد", 95);

// المفاتيح مرتبة أبجدياً تلقائياً!
System.out.println(scores);  // {أحمد=85, زيد=90, محمد=95}

// ═══════════════════════════════════════════
// 🔹 Methods خاصة بـ TreeMap
// ═══════════════════════════════════════════
String first = scores.firstKey();     // أحمد
String last = scores.lastKey();       // محمد
String lower = scores.lowerKey("زيد");  // أحمد (قبله)
String higher = scores.higherKey("زيد"); // محمد (بعده)

var headMap = scores.headMap("زيد"); // كل اللي قبل زيد
var tailMap = scores.tailMap("زيد"); // زيد وما بعده
                                    </pre>
                                </div>
                                
                                <h4>TreeSet:</h4>
                                <div class="code-block">
                                    <pre>
TreeSet&lt;Integer&gt; numbers = new TreeSet&lt;&gt;();

numbers.add(30);
numbers.add(10);
numbers.add(20);

System.out.println(numbers);  // [10, 20, 30] مرتبة!

// ═══════════════════════════════════════════
// 🔹 Methods خاصة بـ TreeSet
// ═══════════════════════════════════════════
int first = numbers.first();          // 10
int last = numbers.last();            // 30
int lower = numbers.lower(20);        // 10 (أقل من 20)
int higher = numbers.higher(20);      // 30 (أكبر من 20)
int floor = numbers.floor(25);        // 20 (أقل أو يساوي)
int ceiling = numbers.ceiling(25);    // 30 (أكبر أو يساوي)

numbers.pollFirst();                  // حذف وإرجاع الأول
numbers.pollLast();                   // حذف وإرجاع الأخير
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Summary Table -->
                        <div class="topic-section">
                            <h3 class="topic-title">📋 ملخص سريع</h3>
                            <div class="topic-content">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>الهيكل</th>
                                            <th>الخاصية</th>
                                            <th>الاستخدام الأفضل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>ArrayList</code></td>
                                            <td>Index-based</td>
                                            <td>وصول سريع، قراءة كثيرة</td>
                                        </tr>
                                        <tr>
                                            <td><code>LinkedList</code></td>
                                            <td>Node-based</td>
                                            <td>إضافة/حذف من الأطراف</td>
                                        </tr>
                                        <tr>
                                            <td><code>Stack</code></td>
                                            <td>LIFO</td>
                                            <td>Undo, تقييم expressions</td>
                                        </tr>
                                        <tr>
                                            <td><code>Queue</code></td>
                                            <td>FIFO</td>
                                            <td>طوابير انتظار، BFS</td>
                                        </tr>
                                        <tr>
                                            <td><code>PriorityQueue</code></td>
                                            <td>Heap</td>
                                            <td>أولويات، Dijkstra</td>
                                        </tr>
                                        <tr>
                                            <td><code>HashMap</code></td>
                                            <td>Key-Value</td>
                                            <td>بحث سريع O(1)</td>
                                        </tr>
                                        <tr>
                                            <td><code>HashSet</code></td>
                                            <td>Unique</td>
                                            <td>إزالة التكرار</td>
                                        </tr>
                                        <tr>
                                            <td><code>TreeMap</code></td>
                                            <td>Sorted Map</td>
                                            <td>مفاتيح مرتبة</td>
                                        </tr>
                                        <tr>
                                            <td><code>TreeSet</code></td>
                                            <td>Sorted Set</td>
                                            <td>عناصر فريدة ومرتبة</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div> <!-- End ds-jcf -->

                </div>
            </div>

            <!-- Accordion Item 4: Collections & Arrays Utility -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">🛠️</span>
                    <span class="accordion-title">Java Collections & Arrays Utility</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- Introduction -->
                    <div class="topic-section">
                        <h3 class="topic-title">🛠️ ما هي Utility Classes؟</h3>
                        <div class="topic-content">
                            <p><strong>Arrays</strong> و <strong>Collections</strong> هما classes تحتوي على static methods جاهزة للتعامل مع المصفوفات والـ Collections. توفر لك وقت كتير!</p>
                            
                            <div class="code-block">
                                <pre>
import java.util.Arrays;       // للتعامل مع Array العادية
import java.util.Collections;  // للتعامل مع Collection (ArrayList, etc.)
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Utility Selector -->
                    <div class="topic-section" style="background: linear-gradient(135deg, rgba(102, 126, 234, 0.2), rgba(118, 75, 162, 0.2)); border-left: 4px solid #764ba2;">
                        <h3 class="topic-title">🎯 اختر الـ Utility Class:</h3>
                        <div class="ds-selector">
                            <button class="ds-button active" onclick="selectUtility('arrays')">
                                📦 Arrays
                            </button>
                            <button class="ds-button" onclick="selectUtility('collections')">
                                📚 Collections
                            </button>
                        </div>
                    </div>

                    <!-- Arrays Content -->
                    <div id="util-arrays" class="util-content active">
                        
                        <div class="topic-section">
                            <h3 class="topic-title">📦 Arrays Utility Class</h3>
                            <div class="topic-content">
                                <p>كل الـ methods هنا تشتغل على <strong>Array العادية</strong> (int[], String[], etc.)</p>
                            </div>
                        </div>

                        <!-- Arrays.sort -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔄 Arrays.sort() - الترتيب</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
int[] numbers = {5, 2, 8, 1, 9};

// ═══════════════════════════════════════════
// 🔹 ترتيب كامل (تصاعدي)
// ═══════════════════════════════════════════
Arrays.sort(numbers);
// numbers = [1, 2, 5, 8, 9]

// ═══════════════════════════════════════════
// 🔹 ترتيب جزء من الـ Array
// ═══════════════════════════════════════════
int[] arr = {5, 2, 8, 1, 9, 3};
Arrays.sort(arr, 1, 4);  // ترتيب من index 1 لـ 3 فقط
// arr = [5, 1, 2, 8, 9, 3]

// ═══════════════════════════════════════════
// 🔹 ترتيب تنازلي (للـ Objects فقط)
// ═══════════════════════════════════════════
Integer[] nums = {5, 2, 8, 1, 9};
Arrays.sort(nums, Collections.reverseOrder());
// nums = [9, 8, 5, 2, 1]

// ═══════════════════════════════════════════
// 🔹 ترتيب نصوص
// ═══════════════════════════════════════════
String[] names = {"زيد", "أحمد", "محمد"};
Arrays.sort(names);
// names = ["أحمد", "زيد", "محمد"] (أبجدي)
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Arrays.binarySearch -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔍 Arrays.binarySearch() - البحث الثنائي</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
int[] sorted = {1, 2, 5, 8, 9};  // ⚠️ لازم يكون مرتب!

// ═══════════════════════════════════════════
// 🔹 بحث عن عنصر موجود
// ═══════════════════════════════════════════
int index = Arrays.binarySearch(sorted, 5);
// index = 2 ✅

// ═══════════════════════════════════════════
// 🔹 بحث عن عنصر مش موجود
// ═══════════════════════════════════════════
int notFound = Arrays.binarySearch(sorted, 6);
// notFound = -4 (سالب = مش موجود)
// المعنى: لو كان موجود كان هيكون في index 3

// ═══════════════════════════════════════════
// 🔹 شرح القيمة السالبة
// ═══════════════════════════════════════════
// لو النتيجة سالبة: -(insertion point) - 1
// يعني: index = -(notFound + 1) = 3
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Arrays.fill -->
                        <div class="topic-section">
                            <h3 class="topic-title">🎨 Arrays.fill() - ملء بقيمة</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
int[] arr = new int[5];

// ═══════════════════════════════════════════
// 🔹 ملء كامل
// ═══════════════════════════════════════════
Arrays.fill(arr, 10);
// arr = [10, 10, 10, 10, 10]

// ═══════════════════════════════════════════
// 🔹 ملء جزء من الـ Array
// ═══════════════════════════════════════════
int[] arr2 = {1, 2, 3, 4, 5};
Arrays.fill(arr2, 1, 4, 0);  // من index 1 لـ 3
// arr2 = [1, 0, 0, 0, 5]
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Arrays.copyOf -->
                        <div class="topic-section">
                            <h3 class="topic-title">📋 Arrays.copyOf() - النسخ</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
int[] original = {1, 2, 3, 4, 5};

// ═══════════════════════════════════════════
// 🔹 نسخ كامل
// ═══════════════════════════════════════════
int[] copy = Arrays.copyOf(original, original.length);
// copy = [1, 2, 3, 4, 5]

// ═══════════════════════════════════════════
// 🔹 نسخ مع تكبير الحجم
// ═══════════════════════════════════════════
int[] bigger = Arrays.copyOf(original, 8);
// bigger = [1, 2, 3, 4, 5, 0, 0, 0]

// ═══════════════════════════════════════════
// 🔹 نسخ مع تصغير الحجم
// ═══════════════════════════════════════════
int[] smaller = Arrays.copyOf(original, 3);
// smaller = [1, 2, 3]

// ═══════════════════════════════════════════
// 🔹 نسخ جزء معين
// ═══════════════════════════════════════════
int[] range = Arrays.copyOfRange(original, 1, 4);
// range = [2, 3, 4] (من index 1 لـ 3)
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Arrays.equals & toString -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔄 Arrays.equals() & toString()</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
int[] arr1 = {1, 2, 3};
int[] arr2 = {1, 2, 3};
int[] arr3 = {1, 2, 4};

// ═══════════════════════════════════════════
// 🔹 مقارنة Arrays
// ═══════════════════════════════════════════
boolean same = Arrays.equals(arr1, arr2);  // true ✅
boolean diff = Arrays.equals(arr1, arr3);  // false ❌

// ⚠️ لا تستخدم == للمقارنة!
boolean wrong = (arr1 == arr2);  // false (مقارنة references!)

// ═══════════════════════════════════════════
// 🔹 تحويل لـ String للطباعة
// ═══════════════════════════════════════════
System.out.println(arr1);              // [I@15db9742 ❌
System.out.println(Arrays.toString(arr1)); // [1, 2, 3] ✅

// ═══════════════════════════════════════════
// 🔹 للـ 2D Arrays
// ═══════════════════════════════════════════
int[][] matrix = {{1, 2}, {3, 4}};
System.out.println(Arrays.deepToString(matrix));
// [[1, 2], [3, 4]]

boolean equal2D = Arrays.deepEquals(matrix, matrix);  // true
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Arrays.asList -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔄 Arrays.asList() - تحويل لـ List</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
// ═══════════════════════════════════════════
// 🔹 تحويل Array لـ List
// ═══════════════════════════════════════════
String[] arr = {"أحمد", "محمد", "علي"};
List&lt;String&gt; list = Arrays.asList(arr);

// ⚠️ الـ List الناتجة ثابتة الحجم!
list.add("سارة");  // ❌ UnsupportedOperationException!

// ═══════════════════════════════════════════
// 🔹 لعمل List قابلة للتعديل
// ═══════════════════════════════════════════
List&lt;String&gt; modifiable = new ArrayList&lt;&gt;(Arrays.asList(arr));
modifiable.add("سارة");  // ✅ شغال

// ═══════════════════════════════════════════
// 🔹 إنشاء List مباشرة
// ═══════════════════════════════════════════
List&lt;Integer&gt; nums = Arrays.asList(1, 2, 3, 4, 5);
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Arrays Summary -->
                        <div class="topic-section">
                            <h3 class="topic-title">📋 ملخص Arrays Methods</h3>
                            <div class="topic-content">
                                <div class="terminal-table-container">
                                    <table class="terminal-table">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>الوظيفة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>sort(arr)</td>
                                                <td>ترتيب تصاعدي</td>
                                            </tr>
                                            <tr>
                                                <td>sort(arr, from, to)</td>
                                                <td>ترتيب جزء</td>
                                            </tr>
                                            <tr>
                                                <td>binarySearch(arr, x)</td>
                                                <td>بحث ثنائي (لازم مرتب!)</td>
                                            </tr>
                                            <tr>
                                                <td>fill(arr, val)</td>
                                                <td>ملء بقيمة</td>
                                            </tr>
                                            <tr>
                                                <td>copyOf(arr, len)</td>
                                                <td>نسخ مع تحديد الطول</td>
                                            </tr>
                                            <tr>
                                                <td>copyOfRange(arr,f,t)</td>
                                                <td>نسخ جزء</td>
                                            </tr>
                                            <tr>
                                                <td>equals(arr1, arr2)</td>
                                                <td>مقارنة</td>
                                            </tr>
                                            <tr>
                                                <td>toString(arr)</td>
                                                <td>تحويل لـ String</td>
                                            </tr>
                                            <tr>
                                                <td>asList(arr)</td>
                                                <td>تحويل لـ List (ثابتة الحجم)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End util-arrays -->

                    <!-- Collections Content -->
                    <div id="util-collections" class="util-content">
                        
                        <div class="topic-section">
                            <h3 class="topic-title">📚 Collections Utility Class</h3>
                            <div class="topic-content">
                                <p>كل الـ methods هنا تشتغل على <strong>Collections</strong> (ArrayList, LinkedList, etc.)</p>
                            </div>
                        </div>

                        <!-- Collections.sort -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔄 Collections.sort() - الترتيب</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
ArrayList&lt;Integer&gt; nums = new ArrayList&lt;&gt;(
    Arrays.asList(5, 2, 8, 1, 9)
);

// ═══════════════════════════════════════════
// 🔹 ترتيب تصاعدي
// ═══════════════════════════════════════════
Collections.sort(nums);
// nums = [1, 2, 5, 8, 9]

// ═══════════════════════════════════════════
// 🔹 ترتيب تنازلي
// ═══════════════════════════════════════════
Collections.sort(nums, Collections.reverseOrder());
// nums = [9, 8, 5, 2, 1]

// ═══════════════════════════════════════════
// 🔹 ترتيب حسب معيار خاص (Comparator)
// ═══════════════════════════════════════════
ArrayList&lt;String&gt; names = new ArrayList&lt;&gt;(
    Arrays.asList("أحمد", "سارة", "محمد")
);

// ترتيب حسب طول الاسم
Collections.sort(names, (a, b) -&gt; a.length() - b.length());

// أو
names.sort(Comparator.comparingInt(String::length));
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Collections.reverse & shuffle -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔄 Collections.reverse() & shuffle()</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
ArrayList&lt;Integer&gt; list = new ArrayList&lt;&gt;(
    Arrays.asList(1, 2, 3, 4, 5)
);

// ═══════════════════════════════════════════
// 🔹 عكس القائمة
// ═══════════════════════════════════════════
Collections.reverse(list);
// list = [5, 4, 3, 2, 1]

// ═══════════════════════════════════════════
// 🔹 خلط عشوائي
// ═══════════════════════════════════════════
Collections.shuffle(list);
// list = [3, 1, 5, 2, 4] (عشوائي كل مرة)

// ═══════════════════════════════════════════
// 🔹 خلط بـ seed ثابت (للـ testing)
// ═══════════════════════════════════════════
Collections.shuffle(list, new Random(42));
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Collections.max & min -->
                        <div class="topic-section">
                            <h3 class="topic-title">📊 Collections.max() & min()</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
ArrayList&lt;Integer&gt; nums = new ArrayList&lt;&gt;(
    Arrays.asList(5, 2, 8, 1, 9)
);

// ═══════════════════════════════════════════
// 🔹 أكبر وأصغر قيمة
// ═══════════════════════════════════════════
int max = Collections.max(nums);  // 9
int min = Collections.min(nums);  // 1

// ═══════════════════════════════════════════
// 🔹 مع Comparator خاص
// ═══════════════════════════════════════════
ArrayList&lt;String&gt; words = new ArrayList&lt;&gt;(
    Arrays.asList("أ", "أحمد", "ب")
);

// أطول كلمة
String longest = Collections.max(words, 
    Comparator.comparingInt(String::length)
);  // "أحمد"
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Collections.frequency -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔢 Collections.frequency() - عدد التكرار</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
ArrayList&lt;Integer&gt; nums = new ArrayList&lt;&gt;(
    Arrays.asList(1, 2, 2, 3, 2, 4, 2)
);

// ═══════════════════════════════════════════
// 🔹 عدد مرات ظهور عنصر
// ═══════════════════════════════════════════
int count = Collections.frequency(nums, 2);
// count = 4 (الرقم 2 ظهر 4 مرات)

// ═══════════════════════════════════════════
// 🔹 إيجاد العنصر الأكثر تكراراً
// ═══════════════════════════════════════════
int mostFrequent = nums.stream()
    .distinct()
    .max(Comparator.comparingInt(x -&gt; 
        Collections.frequency(nums, x)
    ))
    .orElse(-1);
// mostFrequent = 2
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Collections.binarySearch -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔍 Collections.binarySearch()</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
ArrayList&lt;Integer&gt; sorted = new ArrayList&lt;&gt;(
    Arrays.asList(1, 2, 5, 8, 9)  // ⚠️ لازم مرتب!
);

// ═══════════════════════════════════════════
// 🔹 بحث ثنائي
// ═══════════════════════════════════════════
int index = Collections.binarySearch(sorted, 5);
// index = 2 ✅

int notFound = Collections.binarySearch(sorted, 6);
// notFound = -4 (سالب = مش موجود)
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Collections.swap & rotate -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔄 Collections.swap() & rotate()</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
ArrayList&lt;Integer&gt; list = new ArrayList&lt;&gt;(
    Arrays.asList(1, 2, 3, 4, 5)
);

// ═══════════════════════════════════════════
// 🔹 تبديل عنصرين
// ═══════════════════════════════════════════
Collections.swap(list, 0, 4);  // تبديل الأول والأخير
// list = [5, 2, 3, 4, 1]

// ═══════════════════════════════════════════
// 🔹 تدوير القائمة
// ═══════════════════════════════════════════
list = new ArrayList&lt;&gt;(Arrays.asList(1, 2, 3, 4, 5));
Collections.rotate(list, 2);  // تدوير لليمين بـ 2
// list = [4, 5, 1, 2, 3]

Collections.rotate(list, -1);  // تدوير لليسار بـ 1
// list = [5, 1, 2, 3, 4]
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Collections.replaceAll & fill -->
                        <div class="topic-section">
                            <h3 class="topic-title">🔄 Collections.replaceAll() & fill()</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
ArrayList&lt;Integer&gt; list = new ArrayList&lt;&gt;(
    Arrays.asList(1, 2, 2, 3, 2)
);

// ═══════════════════════════════════════════
// 🔹 استبدال كل ظهور لقيمة
// ═══════════════════════════════════════════
Collections.replaceAll(list, 2, 99);
// list = [1, 99, 99, 3, 99]

// ═══════════════════════════════════════════
// 🔹 ملء القائمة بقيمة واحدة
// ═══════════════════════════════════════════
Collections.fill(list, 0);
// list = [0, 0, 0, 0, 0]

// ═══════════════════════════════════════════
// 🔹 نسخ قائمة لأخرى
// ═══════════════════════════════════════════
ArrayList&lt;Integer&gt; src = new ArrayList&lt;&gt;(Arrays.asList(1, 2, 3));
ArrayList&lt;Integer&gt; dest = new ArrayList&lt;&gt;(Arrays.asList(0, 0, 0, 0, 0));
Collections.copy(dest, src);  // ⚠️ dest لازم أكبر أو يساوي src
// dest = [1, 2, 3, 0, 0]
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Collections.nCopies -->
                        <div class="topic-section">
                            <h3 class="topic-title">📋 Collections.nCopies() - إنشاء قائمة متكررة</h3>
                            <div class="topic-content">
                                <div class="code-block">
                                    <pre>
// ═══════════════════════════════════════════
// 🔹 إنشاء قائمة بعنصر متكرر
// ═══════════════════════════════════════════
List&lt;Integer&gt; zeros = Collections.nCopies(5, 0);
// zeros = [0, 0, 0, 0, 0]

List&lt;String&gt; hellos = Collections.nCopies(3, "مرحباً");
// hellos = ["مرحباً", "مرحباً", "مرحباً"]

// ⚠️ القائمة الناتجة immutable (غير قابلة للتعديل)
// لعمل قائمة قابلة للتعديل:
ArrayList&lt;Integer&gt; modifiable = new ArrayList&lt;&gt;(
    Collections.nCopies(5, 0)
);
                                    </pre>
                                </div>
                            </div>
                        </div>

                        <!-- Collections Summary -->
                        <div class="topic-section">
                            <h3 class="topic-title">📋 ملخص Collections Methods</h3>
                            <div class="topic-content">
                                <div class="terminal-table-container">
                                    <table class="terminal-table">
                                        <thead>
                                            <tr>
                                                <th>Method</th>
                                                <th>الوظيفة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>sort(list)</td>
                                                <td>ترتيب</td>
                                            </tr>
                                            <tr>
                                                <td>reverse(list)</td>
                                                <td>عكس</td>
                                            </tr>
                                            <tr>
                                                <td>shuffle(list)</td>
                                                <td>خلط عشوائي</td>
                                            </tr>
                                            <tr>
                                                <td>max(list)</td>
                                                <td>أكبر قيمة</td>
                                            </tr>
                                            <tr>
                                                <td>min(list)</td>
                                                <td>أصغر قيمة</td>
                                            </tr>
                                            <tr>
                                                <td>frequency(list, x)</td>
                                                <td>عدد التكرار</td>
                                            </tr>
                                            <tr>
                                                <td>binarySearch(l, x)</td>
                                                <td>بحث ثنائي (لازم مرتب!)</td>
                                            </tr>
                                            <tr>
                                                <td>swap(list, i, j)</td>
                                                <td>تبديل عنصرين</td>
                                            </tr>
                                            <tr>
                                                <td>rotate(list, n)</td>
                                                <td>تدوير</td>
                                            </tr>
                                            <tr>
                                                <td>replaceAll(l, a, b)</td>
                                                <td>استبدال كل a بـ b</td>
                                            </tr>
                                            <tr>
                                                <td>fill(list, val)</td>
                                                <td>ملء بقيمة</td>
                                            </tr>
                                            <tr>
                                                <td>copy(dest, src)</td>
                                                <td>نسخ</td>
                                            </tr>
                                            <tr>
                                                <td>nCopies(n, val)</td>
                                                <td>إنشاء قائمة متكررة</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End util-collections -->

                </div>
            </div>

            <!-- Accordion Item 4: Sorting & Searching -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">🔍</span>
                    <span class="accordion-title">Sorting & Searching Algorithms</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- Introduction -->
                    <div class="topic-section">
                        <h3 class="topic-title">📊 مقدمة في الترتيب والبحث</h3>
                        <div class="topic-content">
                            <p><strong>Sorting (الترتيب):</strong> ترتيب العناصر تصاعدياً أو تنازلياً.</p>
                            <p><strong>Searching (البحث):</strong> إيجاد عنصر معين في المجموعة.</p>
                            
                            <h4>🔑 خوارزميات الترتيب:</h4>
                            <ul class="topic-list">
                                <li><strong>Bubble Sort:</strong> مقارنة كل عنصرين متجاورين</li>
                                <li><strong>Selection Sort:</strong> إيجاد الأصغر ووضعه في البداية</li>
                                <li><strong>Insertion Sort:</strong> إدراج كل عنصر في مكانه الصحيح</li>
                            </ul>
                            
                            <h4>🔑 خوارزميات البحث:</h4>
                            <ul class="topic-list">
                                <li><strong>Linear Search:</strong> بحث تسلسلي (O(n))</li>
                                <li><strong>Binary Search:</strong> بحث ثنائي (O(log n)) - يحتاج ترتيب!</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Bubble Sort -->
                    <div class="topic-section">
                        <h3 class="topic-title">🫧 Bubble Sort (الترتيب الفقاعي)</h3>
                        <div class="topic-content">
                            <p><strong>الفكرة:</strong> نقارن كل عنصرين متجاورين، لو الأول أكبر نبدلهم. نكرر حتى لا يوجد تبديل.</p>
                            
                            <h4>تخيل Bubble Sort:</h4>
                            <div class="code-block">
                                <pre>
Array: [5, 2, 8, 1, 9]

Pass 1: [5,2] → [2,5,8,1,9] → [5,8] ✓ → [8,1] → [2,5,1,8,9] → [8,9] ✓
Result: [2, 5, 1, 8, 9]

Pass 2: [2,5] ✓ → [5,1] → [2,1,5,8,9] → [5,8] ✓ → [8,9] ✓
Result: [2, 1, 5, 8, 9]

... وهكذا حتى الترتيب الكامل
Final: [1, 2, 5, 8, 9]
                                </pre>
                            </div>
                            
                            <h4>1️⃣ Bubble Sort لـ Integer Array:</h4>
                            <div class="code-block">
                                <pre>
public static void bubbleSort(int[] arr) {
    int n = arr.length;
    
    // n-1 passes
    for (int i = 0; i < n - 1; i++) {
        // مقارنة العناصر المتجاورة
        for (int j = 0; j < n - i - 1; j++) {
            // لو العنصر الحالي أكبر من التالي، نبدلهم
            if (arr[j] > arr[j + 1]) {
                // Swap
                int temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
}

// الاستخدام
int[] numbers = {5, 2, 8, 1, 9};
bubbleSort(numbers);
// Result: [1, 2, 5, 8, 9]
                                </pre>
                            </div>
                            
                            <h4>2️⃣ Bubble Sort لـ Character Array:</h4>
                            <div class="code-block">
                                <pre>
public static void bubbleSort(char[] arr) {
    int n = arr.length;
    for (int i = 0; i < n - 1; i++) {
        for (int j = 0; j < n - i - 1; j++) {
            if (arr[j] > arr[j + 1]) {
                char temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
}

// الاستخدام
char[] chars = {'d', 'a', 'c', 'b', 'e'};
bubbleSort(chars);
// Result: ['a', 'b', 'c', 'd', 'e']
                                </pre>
                            </div>
                            
                            <h4>3️⃣ Bubble Sort لـ String Array:</h4>
                            <div class="code-block">
                                <pre>
public static void bubbleSort(String[] arr) {
    int n = arr.length;
    for (int i = 0; i < n - 1; i++) {
        for (int j = 0; j < n - i - 1; j++) {
            // نستخدم compareTo للمقارنة بين Strings
            if (arr[j].compareTo(arr[j + 1]) > 0) {
                String temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
}

// الاستخدام
String[] names = {"Zaid", "Ahmed", "Omar", "Ali"};
bubbleSort(names);
// Result: ["Ahmed", "Ali", "Omar", "Zaid"]
                                </pre>
                            </div>
                            
                            <h4>4️⃣ Bubble Sort لـ ArrayList:</h4>
                            <div class="code-block">
                                <pre>
public static void bubbleSort(ArrayList&lt;Integer&gt; list) {
    int n = list.size();
    for (int i = 0; i < n - 1; i++) {
        for (int j = 0; j < n - i - 1; j++) {
            if (list.get(j) > list.get(j + 1)) {
                // Swap using get and set
                int temp = list.get(j);
                list.set(j, list.get(j + 1));
                list.set(j + 1, temp);
            }
        }
    }
}

// الاستخدام
ArrayList&lt;Integer&gt; nums = new ArrayList&lt;&gt;();
nums.add(5); nums.add(2); nums.add(8);
bubbleSort(nums);
// Result: [2, 5, 8]
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Selection Sort -->
                    <div class="topic-section">
                        <h3 class="topic-title">👆 Selection Sort (ترتيب الاختيار)</h3>
                        <div class="topic-content">
                            <p><strong>الفكرة:</strong> نجد أصغر عنصر ونضعه في البداية، ثم نجد ثاني أصغر ونضعه في المكان الثاني، وهكذا.</p>
                            
                            <h4>تخيل Selection Sort:</h4>
                            <div class="code-block">
                                <pre>
Array: [5, 2, 8, 1, 9]

Pass 1: أصغر عنصر = 1 (index 3)
        نبدل مع العنصر الأول
Result: [1, 2, 8, 5, 9]

Pass 2: أصغر عنصر في الباقي = 2 (index 1) ✓
Result: [1, 2, 8, 5, 9]

Pass 3: أصغر عنصر في الباقي = 5 (index 3)
        نبدل مع index 2
Result: [1, 2, 5, 8, 9]

Final: [1, 2, 5, 8, 9]
                                </pre>
                            </div>
                            
                            <h4>1️⃣ Selection Sort لـ Integer Array:</h4>
                            <div class="code-block">
                                <pre>
public static void selectionSort(int[] arr) {
    int n = arr.length;
    
    for (int i = 0; i < n - 1; i++) {
        // نفترض أن العنصر الحالي هو الأصغر
        int minIndex = i;
        
        // نبحث عن الأصغر في الباقي
        for (int j = i + 1; j < n; j++) {
            if (arr[j] < arr[minIndex]) {
                minIndex = j;
            }
        }
        
        // نبدل الأصغر مع العنصر الحالي
        int temp = arr[minIndex];
        arr[minIndex] = arr[i];
        arr[i] = temp;
    }
}

// الاستخدام
int[] numbers = {64, 25, 12, 22, 11};
selectionSort(numbers);
// Result: [11, 12, 22, 25, 64]
                                </pre>
                            </div>
                            
                            <h4>2️⃣ Selection Sort لـ String Array:</h4>
                            <div class="code-block">
                                <pre>
public static void selectionSort(String[] arr) {
    int n = arr.length;
    
    for (int i = 0; i < n - 1; i++) {
        int minIndex = i;
        
        for (int j = i + 1; j < n; j++) {
            // compareTo تقارن alphabetically
            if (arr[j].compareTo(arr[minIndex]) < 0) {
                minIndex = j;
            }
        }
        
        String temp = arr[minIndex];
        arr[minIndex] = arr[i];
        arr[i] = temp;
    }
}

// الاستخدام
String[] fruits = {"Banana", "Apple", "Cherry", "Date"};
selectionSort(fruits);
// Result: ["Apple", "Banana", "Cherry", "Date"]
                                </pre>
                            </div>
                            
                            <h4>3️⃣ Selection Sort لـ Character Array:</h4>
                            <div class="code-block">
                                <pre>
public static void selectionSort(char[] arr) {
    int n = arr.length;
    
    for (int i = 0; i < n - 1; i++) {
        int minIndex = i;
        
        for (int j = i + 1; j < n; j++) {
            if (arr[j] < arr[minIndex]) {
                minIndex = j;
            }
        }
        
        char temp = arr[minIndex];
        arr[minIndex] = arr[i];
        arr[i] = temp;
    }
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Insertion Sort -->
                    <div class="topic-section">
                        <h3 class="topic-title">📥 Insertion Sort (ترتيب الإدراج)</h3>
                        <div class="topic-content">
                            <p><strong>الفكرة:</strong> نأخذ كل عنصر وندرجه في مكانه الصحيح بين العناصر المرتبة قبله (مثل ترتيب ورق اللعب في يدك).</p>
                            
                            <h4>تخيل Insertion Sort:</h4>
                            <div class="code-block">
                                <pre>
Array: [5, 2, 8, 1, 9]

i=1: key=2, نقارنه مع 5، 2<5 فنزحلق 5
     [_, 5, 8, 1, 9] → ندرج 2 → [2, 5, 8, 1, 9]

i=2: key=8, 8>5 ✓ لا حاجة للزحلقة
     [2, 5, 8, 1, 9]

i=3: key=1, نزحلق 8,5,2
     [_, 2, 5, 8, 9] → ندرج 1 → [1, 2, 5, 8, 9]

i=4: key=9, 9>8 ✓
     [1, 2, 5, 8, 9]
                                </pre>
                            </div>
                            
                            <h4>1️⃣ Insertion Sort لـ Integer Array:</h4>
                            <div class="code-block">
                                <pre>
public static void insertionSort(int[] arr) {
    int n = arr.length;
    
    for (int i = 1; i < n; i++) {
        int key = arr[i];  // العنصر الحالي المراد إدراجه
        int j = i - 1;
        
        // نزحلق العناصر الأكبر من key لليمين
        while (j >= 0 && arr[j] > key) {
            arr[j + 1] = arr[j];
            j--;
        }
        
        // ندرج key في مكانه الصحيح
        arr[j + 1] = key;
    }
}

// الاستخدام
int[] numbers = {12, 11, 13, 5, 6};
insertionSort(numbers);
// Result: [5, 6, 11, 12, 13]
                                </pre>
                            </div>
                            
                            <h4>2️⃣ Insertion Sort لـ String Array:</h4>
                            <div class="code-block">
                                <pre>
public static void insertionSort(String[] arr) {
    int n = arr.length;
    
    for (int i = 1; i < n; i++) {
        String key = arr[i];
        int j = i - 1;
        
        // نستخدم compareTo للمقارنة
        while (j >= 0 && arr[j].compareTo(key) > 0) {
            arr[j + 1] = arr[j];
            j--;
        }
        
        arr[j + 1] = key;
    }
}

// الاستخدام
String[] words = {"Zebra", "Apple", "Mango", "Banana"};
insertionSort(words);
// Result: ["Apple", "Banana", "Mango", "Zebra"]
                                </pre>
                            </div>
                            
                            <h4>3️⃣ Insertion Sort لـ Character Array:</h4>
                            <div class="code-block">
                                <pre>
public static void insertionSort(char[] arr) {
    int n = arr.length;
    
    for (int i = 1; i < n; i++) {
        char key = arr[i];
        int j = i - 1;
        
        while (j >= 0 && arr[j] > key) {
            arr[j + 1] = arr[j];
            j--;
        }
        
        arr[j + 1] = key;
    }
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Linear Search -->
                    <div class="topic-section">
                        <h3 class="topic-title">➡️ Linear Search (البحث الخطي)</h3>
                        <div class="topic-content">
                            <p><strong>الفكرة:</strong> نمر على كل العناصر واحد واحد حتى نجد المطلوب. بسيط لكن بطيء O(n).</p>
                            
                            <h4>Linear Search لكل الأنواع:</h4>
                            <div class="code-block">
                                <pre>
// لـ Integer Array
public static int linearSearch(int[] arr, int target) {
    for (int i = 0; i < arr.length; i++) {
        if (arr[i] == target) {
            return i;  // لقيناه! نرجع الـ index
        }
    }
    return -1;  // مش موجود
}

// لـ String Array
public static int linearSearch(String[] arr, String target) {
    for (int i = 0; i < arr.length; i++) {
        if (arr[i].equals(target)) {
            return i;
        }
    }
    return -1;
}

// الاستخدام
int[] numbers = {5, 2, 8, 1, 9};
int index = linearSearch(numbers, 8);  // Result: 2
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Binary Search -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔍 Binary Search (البحث الثنائي)</h3>
                        <div class="topic-content">
                            <p><strong>الفكرة:</strong> نقسم المصفوفة للنصف ونقارن مع العنصر الأوسط. إذا أكبر نبحث يميناً، إذا أصغر نبحث يساراً.</p>
                            <p><strong>⚠️ مهم:</strong> يجب أن تكون المصفوفة <strong>مرتبة</strong> أولاً!</p>
                            
                            <h4>تخيل Binary Search:</h4>
                            <div class="code-block">
                                <pre>
Array (مرتب): [1, 2, 5, 8, 9, 12, 15]
Target: 9

Step 1: left=0, right=6, mid=3
        arr[3]=8 < 9, نبحث يميناً
        left = mid + 1 = 4

Step 2: left=4, right=6, mid=5
        arr[5]=12 > 9, نبحث يساراً
        right = mid - 1 = 4

Step 3: left=4, right=4, mid=4
        arr[4]=9 == 9 ✓ لقيناه!
        return 4
                                </pre>
                            </div>
                            
                            <h4>1️⃣ Binary Search لـ Integer Array:</h4>
                            <div class="code-block">
                                <pre>
public static int binarySearch(int[] arr, int target) {
    int left = 0;
    int right = arr.length - 1;
    
    while (left <= right) {
        // حساب النص
        int mid = left + (right - left) / 2;
        
        // لقيناه!
        if (arr[mid] == target) {
            return mid;
        }
        
        // target أكبر من الأوسط، نبحث يميناً
        if (arr[mid] < target) {
            left = mid + 1;
        }
        // target أصغر من الأوسط، نبحث يساراً
        else {
            right = mid - 1;
        }
    }
    
    return -1;  // مش موجود
}

// الاستخدام - لازم يكون مرتب!
int[] numbers = {1, 2, 5, 8, 9, 12, 15};
int index = binarySearch(numbers, 9);  // Result: 4
                                </pre>
                            </div>
                            
                            <h4>2️⃣ Binary Search لـ String Array:</h4>
                            <div class="code-block">
                                <pre>
public static int binarySearch(String[] arr, String target) {
    int left = 0;
    int right = arr.length - 1;
    
    while (left <= right) {
        int mid = left + (right - left) / 2;
        
        int comparison = arr[mid].compareTo(target);
        
        if (comparison == 0) {
            return mid;  // لقيناه
        }
        
        if (comparison < 0) {
            left = mid + 1;  // target بعد mid
        } else {
            right = mid - 1;  // target قبل mid
        }
    }
    
    return -1;
}

// الاستخدام - لازم يكون مرتب alphabetically!
String[] names = {"Ahmed", "Ali", "Omar", "Zaid"};
int index = binarySearch(names, "Omar");  // Result: 2
                                </pre>
                            </div>
                            
                            <h4>3️⃣ Binary Search لـ ArrayList:</h4>
                            <div class="code-block">
                                <pre>
public static int binarySearch(ArrayList&lt;Integer&gt; list, int target) {
    int left = 0;
    int right = list.size() - 1;
    
    while (left <= right) {
        int mid = left + (right - left) / 2;
        
        if (list.get(mid) == target) {
            return mid;
        }
        
        if (list.get(mid) < target) {
            left = mid + 1;
        } else {
            right = mid - 1;
        }
    }
    
    return -1;
}

// الاستخدام
ArrayList&lt;Integer&gt; nums = new ArrayList&lt;&gt;();
nums.add(1); nums.add(5); nums.add(10); nums.add(15);
int index = binarySearch(nums, 10);  // Result: 2
                                </pre>
                            </div>
                            
                            <h4>4️⃣ استخدام Binary Search الجاهز في Java:</h4>
                            <div class="code-block">
                                <pre>
import java.util.Arrays;
import java.util.Collections;

// لـ Arrays
int[] arr = {1, 2, 5, 8, 9};
int index = Arrays.binarySearch(arr, 5);  // Result: 2

// لـ ArrayList
ArrayList&lt;Integer&gt; list = new ArrayList&lt;&gt;();
// ... add elements and sort first
Collections.sort(list);
int index = Collections.binarySearch(list, 5);
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Comparison -->
                    <div class="topic-section">
                        <h3 class="topic-title">📊 مقارنة الخوارزميات</h3>
                        <div class="topic-content">
                            <h4>Sorting Algorithms:</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Algorithm</th>
                                            <th>Best Case</th>
                                            <th>Worst Case</th>
                                            <th>Space</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bubble Sort</td>
                                            <td>O(n)</td>
                                            <td>O(n²)</td>
                                            <td>O(1)</td>
                                        </tr>
                                        <tr>
                                            <td>Selection Sort</td>
                                            <td>O(n²)</td>
                                            <td>O(n²)</td>
                                            <td>O(1)</td>
                                        </tr>
                                        <tr>
                                            <td>Insertion Sort</td>
                                            <td>O(n)</td>
                                            <td>O(n²)</td>
                                            <td>O(1)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <ul class="topic-list" style="margin-top: 15px;">
                                <li>🏆 <strong>Insertion Sort:</strong> أفضل للمصفوفات الصغيرة أو شبه المرتبة</li>
                                <li>🏆 <strong>Selection Sort:</strong> يعمل أقل عدد من الـ swaps</li>
                                <li>🏆 <strong>Bubble Sort:</strong> الأبسط في الفهم والتطبيق</li>
                            </ul>
                            
                            <h4>Searching Algorithms:</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Algorithm</th>
                                            <th>Time</th>
                                            <th>يحتاج ترتيب</th>
                                            <th>متى نستخدمه</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Linear Search</td>
                                            <td>O(n)</td>
                                            <td>❌</td>
                                            <td>مصفوفات صغيرة</td>
                                        </tr>
                                        <tr>
                                            <td>Binary Search</td>
                                            <td>O(log n)</td>
                                            <td>✅</td>
                                            <td>مصفوفات كبيرة</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <p style="margin-top: 15px;"><strong>مثال:</strong> في مصفوفة 1,000,000 عنصر:</p>
                            <ul class="topic-list">
                                <li><strong>Linear Search:</strong> يحتاج 1,000,000 مقارنة (أسوأ حالة)</li>
                                <li><strong>Binary Search:</strong> يحتاج ~20 مقارنة فقط!</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Complete Example -->
                    <div class="topic-section">
                        <h3 class="topic-title">💻 مثال شامل</h3>
                        <div class="topic-content">
                            <div class="code-block">
                                <pre>
import java.util.Arrays;

public class SortSearchDemo {
    
    // Bubble Sort
    public static void bubbleSort(int[] arr) {
        int n = arr.length;
        for (int i = 0; i < n - 1; i++) {
            for (int j = 0; j < n - i - 1; j++) {
                if (arr[j] > arr[j + 1]) {
                    int temp = arr[j];
                    arr[j] = arr[j + 1];
                    arr[j + 1] = temp;
                }
            }
        }
    }
    
    // Binary Search
    public static int binarySearch(int[] arr, int target) {
        int left = 0, right = arr.length - 1;
        while (left <= right) {
            int mid = left + (right - left) / 2;
            if (arr[mid] == target) return mid;
            if (arr[mid] < target) left = mid + 1;
            else right = mid - 1;
        }
        return -1;
    }
    
    public static void main(String[] args) {
        int[] numbers = {64, 34, 25, 12, 22, 11, 90};
        
        System.out.println("Before sorting: " + Arrays.toString(numbers));
        
        // ترتيب
        bubbleSort(numbers);
        System.out.println("After sorting: " + Arrays.toString(numbers));
        
        // بحث
        int target = 25;
        int index = binarySearch(numbers, target);
        
        if (index != -1) {
            System.out.println(target + " found at index " + index);
        } else {
            System.out.println(target + " not found");
        }
    }
}

/* Output:
Before sorting: [64, 34, 25, 12, 22, 11, 90]
After sorting: [11, 12, 22, 25, 34, 64, 90]
25 found at index 3
*/
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item 5: Exception Handling -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">⚠️</span>
                    <span class="accordion-title">Exception Handling (معالجة الاستثناءات)</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- Introduction -->
                    <div class="topic-section">
                        <h3 class="topic-title">📚 ما هي الـ Exceptions؟</h3>
                        <div class="topic-content">
                            <p><strong>Exception:</strong> هي مشكلة تحدث أثناء تشغيل البرنامج (Runtime) وتوقفه عن العمل.</p>
                            
                            <h4>🔑 أنواع الأخطاء:</h4>
                            <ul class="topic-list">
                                <li><strong>Compile-time Errors:</strong> أخطاء في الكتابة تظهر قبل التشغيل</li>
                                <li><strong>Runtime Errors (Exceptions):</strong> أخطاء تظهر أثناء التشغيل</li>
                                <li><strong>Logical Errors:</strong> البرنامج يعمل لكن النتيجة غلط</li>
                            </ul>
                            
                            <h4>🔑 أمثلة على Exceptions شائعة:</h4>
                            <div class="code-block">
                                <pre>
ArithmeticException      → القسمة على صفر
NullPointerException     → استخدام object = null
ArrayIndexOutOfBoundsException → index خارج حدود المصفوفة
NumberFormatException    → تحويل String غير رقمي لـ int
FileNotFoundException    → ملف غير موجود
InputMismatchException   → المستخدم أدخل نوع بيانات خاطئ
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Try-Catch -->
                    <div class="topic-section">
                        <h3 class="topic-title">🛡️ Try-Catch Block</h3>
                        <div class="topic-content">
                            <p><strong>الفكرة:</strong> نضع الكود اللي ممكن يسبب مشكلة في <code>try</code>، ولو حصل خطأ ننتقل لـ <code>catch</code> بدل ما البرنامج يتوقف.</p>
                            
                            <h4>الصيغة الأساسية:</h4>
                            <div class="code-block">
                                <pre>
try {
    // الكود اللي ممكن يسبب مشكلة
} catch (ExceptionType e) {
    // ماذا نفعل لو حصل الخطأ
}
                                </pre>
                            </div>
                            
                            <h4>مثال 1: القسمة على صفر</h4>
                            <div class="code-block">
                                <pre>
public class DivisionExample {
    public static void main(String[] args) {
        int a = 10;
        int b = 0;
        
        try {
            int result = a / b;  // هنا المشكلة!
            System.out.println("Result: " + result);
        } catch (ArithmeticException e) {
            System.out.println("خطأ: لا يمكن القسمة على صفر!");
            System.out.println("رسالة الخطأ: " + e.getMessage());
        }
        
        System.out.println("البرنامج استمر!");
    }
}

/* Output:
خطأ: لا يمكن القسمة على صفر!
رسالة الخطأ: / by zero
البرنامج استمر!
*/
                                </pre>
                            </div>
                            
                            <h4>مثال 2: Array Index Out of Bounds</h4>
                            <div class="code-block">
                                <pre>
int[] numbers = {1, 2, 3};

try {
    System.out.println(numbers[5]);  // المصفوفة بس 3 عناصر!
} catch (ArrayIndexOutOfBoundsException e) {
    System.out.println("خطأ: الـ index خارج حدود المصفوفة!");
}
                                </pre>
                            </div>
                            
                            <h4>مثال 3: مع Scanner</h4>
                            <div class="code-block">
                                <pre>
import java.util.Scanner;
import java.util.InputMismatchException;

public class InputExample {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        
        try {
            System.out.print("أدخل رقم: ");
            int num = sc.nextInt();  // لو أدخل حرف؟
            System.out.println("أدخلت: " + num);
        } catch (InputMismatchException e) {
            System.out.println("خطأ: يجب إدخال رقم صحيح!");
        }
        
        sc.close();
    }
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Multiple Catch -->
                    <div class="topic-section">
                        <h3 class="topic-title">🎯 Multiple Catch Blocks</h3>
                        <div class="topic-content">
                            <p>يمكن استخدام أكثر من <code>catch</code> للتعامل مع أنواع مختلفة من الأخطاء.</p>
                            
                            <div class="code-block">
                                <pre>
import java.util.Scanner;
import java.util.InputMismatchException;

public class MultipleCatchExample {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[] numbers = {10, 20, 30};
        
        try {
            System.out.print("أدخل index: ");
            int index = sc.nextInt();
            
            int value = numbers[index];
            int result = 100 / value;
            
            System.out.println("Result: " + result);
            
        } catch (InputMismatchException e) {
            System.out.println("خطأ: أدخل رقم صحيح!");
            
        } catch (ArrayIndexOutOfBoundsException e) {
            System.out.println("خطأ: الـ index يجب أن يكون 0-2");
            
        } catch (ArithmeticException e) {
            System.out.println("خطأ: قسمة على صفر!");
            
        } catch (Exception e) {
            // يمسك أي exception تاني
            System.out.println("خطأ غير متوقع: " + e.getMessage());
        }
        
        sc.close();
    }
}
                                </pre>
                            </div>
                            
                            <p><strong>⚠️ مهم:</strong> ضع الـ <code>Exception</code> العام في النهاية (من الأخص للأعم).</p>
                        </div>
                    </div>

                    <!-- Finally Block -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔒 Finally Block</h3>
                        <div class="topic-content">
                            <p><strong>finally:</strong> كود يتنفذ دائماً، سواء حصل خطأ أو لا. يستخدم عادة لإغلاق الموارد.</p>
                            
                            <div class="code-block">
                                <pre>
try {
    // كود قد يسبب خطأ
} catch (Exception e) {
    // معالجة الخطأ
} finally {
    // كود يتنفذ دائماً
    // مثل: إغلاق ملف، إغلاق اتصال قاعدة بيانات
}
                                </pre>
                            </div>
                            
                            <h4>مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.Scanner;

public class FinallyExample {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        
        try {
            System.out.print("أدخل رقم: ");
            int num = sc.nextInt();
            System.out.println("100 / " + num + " = " + (100 / num));
            
        } catch (Exception e) {
            System.out.println("حصل خطأ!");
            
        } finally {
            System.out.println("إغلاق Scanner...");
            sc.close();  // دائماً نغلق الـ Scanner
        }
        
        System.out.println("انتهى البرنامج");
    }
}

/* 
إذا أدخل 5:
100 / 5 = 20
إغلاق Scanner...
انتهى البرنامج

إذا أدخل 0:
حصل خطأ!
إغلاق Scanner...
انتهى البرنامج
*/
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Throw Keyword -->
                    <div class="topic-section">
                        <h3 class="topic-title">🚀 Throw Keyword</h3>
                        <div class="topic-content">
                            <p><strong>throw:</strong> نستخدمها لرمي exception يدوياً.</p>
                            
                            <div class="code-block">
                                <pre>
public class ThrowExample {
    
    public static void checkAge(int age) {
        if (age < 0) {
            throw new IllegalArgumentException("العمر لا يمكن أن يكون سالب!");
        }
        if (age < 18) {
            throw new ArithmeticException("العمر أقل من 18!");
        }
        System.out.println("العمر مقبول: " + age);
    }
    
    public static void main(String[] args) {
        try {
            checkAge(15);
        } catch (Exception e) {
            System.out.println("خطأ: " + e.getMessage());
        }
        
        try {
            checkAge(-5);
        } catch (Exception e) {
            System.out.println("خطأ: " + e.getMessage());
        }
        
        try {
            checkAge(25);
        } catch (Exception e) {
            System.out.println("خطأ: " + e.getMessage());
        }
    }
}

/* Output:
خطأ: العمر أقل من 18!
خطأ: العمر لا يمكن أن يكون سالب!
العمر مقبول: 25
*/
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Throws Keyword -->
                    <div class="topic-section">
                        <h3 class="topic-title">📤 Throws Keyword</h3>
                        <div class="topic-content">
                            <p><strong>throws:</strong> تستخدم في تعريف الـ method لتوضيح أن هذه الـ method قد ترمي exception، ومن يستدعيها يجب أن يتعامل معها.</p>
                            
                            <div class="code-block">
                                <pre>
import java.io.*;

public class ThrowsExample {
    
    // هذه الـ method قد ترمي IOException
    public static void readFile(String filename) throws IOException {
        FileReader file = new FileReader(filename);
        BufferedReader reader = new BufferedReader(file);
        
        String line = reader.readLine();
        System.out.println(line);
        
        reader.close();
    }
    
    public static void main(String[] args) {
        // يجب التعامل مع الـ IOException
        try {
            readFile("test.txt");
        } catch (IOException e) {
            System.out.println("الملف غير موجود!");
        }
    }
}
                                </pre>
                            </div>
                            
                            <h4>الفرق بين throw و throws:</h4>
                                <div class="terminal-table-container">
                                    <table class="terminal-table">
                                        <thead>
                                            <tr>
                                                <th>throw</th>
                                                <th>throws</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>داخل الكود</td>
                                                <td>في تعريف الـ method</td>
                                            </tr>
                                            <tr>
                                                <td>يرمي exception واحد</td>
                                                <td>يعلن عن exceptions محتملة</td>
                                            </tr>
                                            <tr>
                                                <td>throw new Exception()</td>
                                                <td>void method() throws Exception</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>

                    <!-- Custom Exception -->
                    <div class="topic-section">
                        <h3 class="topic-title">🎨 Custom Exception</h3>
                        <div class="topic-content">
                            <p>يمكننا إنشاء Exception خاص بنا بوراثة الـ <code>Exception</code> class.</p>
                            
                            <div class="code-block">
                                <pre>
// إنشاء Custom Exception
class InvalidScoreException extends Exception {
    public InvalidScoreException(String message) {
        super(message);
    }
}

public class CustomExceptionExample {
    
    public static void setScore(int score) throws InvalidScoreException {
        if (score < 0 || score > 100) {
            throw new InvalidScoreException("الدرجة يجب أن تكون بين 0 و 100");
        }
        System.out.println("الدرجة: " + score);
    }
    
    public static void main(String[] args) {
        try {
            setScore(85);   // صحيح
            setScore(150);  // خطأ!
        } catch (InvalidScoreException e) {
            System.out.println("خطأ: " + e.getMessage());
        }
    }
}

/* Output:
الدرجة: 85
خطأ: الدرجة يجب أن تكون بين 0 و 100
*/
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Summary -->
                    <div class="topic-section">
                        <h3 class="topic-title">📋 ملخص Exception Handling</h3>
                        <div class="topic-content">
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>الكلمة</th>
                                            <th>الاستخدام</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>try</td>
                                            <td>الكود المراد مراقبته (قد يحدث فيه خطأ)</td>
                                        </tr>
                                        <tr>
                                            <td>catch</td>
                                            <td>بلوك لمعالجة الخطأ إذا حدث</td>
                                        </tr>
                                        <tr>
                                            <td>finally</td>
                                            <td>كود يتنفذ دائماً (سواء حدث خطأ أم لا) - لتنظيف الموارد</td>
                                        </tr>
                                        <tr>
                                            <td>throw</td>
                                            <td>لرمي (إحداث) exception يدوياً</td>
                                        </tr>
                                        <tr>
                                            <td>throws</td>
                                            <td>يوضع في تعريف الـ method للإعلان أنها قد ترمي exception</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="code-block" style="margin-top: 1rem;">
                                <pre>
🔑 نصائح مهمة:
• دائماً تعامل مع الـ exceptions المحتملة
• استخدم finally لإغلاق الموارد (Scanner, Files, etc.)
• ضع الـ catch الأخص قبل الأعم
• لا تترك catch block فارغ
• استخدم رسائل خطأ واضحة ومفهومة
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item 6: File Handling -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">📁</span>
                    <span class="accordion-title">File Handling (التعامل مع الملفات)</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- Introduction -->
                    <div class="topic-section">
                        <h3 class="topic-title">📚 مقدمة في File Handling</h3>
                        <div class="topic-content">
                            <p>التعامل مع الملفات يسمح لنا بحفظ البيانات بشكل دائم (بدل ما تضيع لما البرنامج يقفل).</p>
                            
                            <h4>🔑 العمليات الأساسية:</h4>
                            <ul class="topic-list">
                                <li><strong>Create:</strong> إنشاء ملف جديد</li>
                                <li><strong>Write:</strong> كتابة بيانات في الملف</li>
                                <li><strong>Read:</strong> قراءة بيانات من الملف</li>
                                <li><strong>Delete:</strong> حذف الملف</li>
                            </ul>
                            
                            <h4>🔑 الـ Classes المستخدمة:</h4>
                            <div class="code-block">
                                <pre>
import java.io.File;           // للتعامل مع الملف نفسه
import java.io.FileWriter;     // للكتابة في ملف
import java.io.FileReader;     // للقراءة من ملف
import java.io.BufferedWriter; // كتابة أسرع (مع buffer)
import java.io.BufferedReader; // قراءة أسرع (مع buffer)
import java.io.PrintWriter;    // كتابة سهلة (مثل System.out)
import java.util.Scanner;      // قراءة سهلة من ملف
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- File Class -->
                    <div class="topic-section">
                        <h3 class="topic-title">📄 File Class</h3>
                        <div class="topic-content">
                            <p>الـ <code>File</code> class يستخدم للتعامل مع الملفات والمجلدات (إنشاء، حذف، معرفة معلومات).</p>
                            
                            <h4>إنشاء وفحص ملف:</h4>
                            <div class="code-block">
                                <pre>
import java.io.File;
import java.io.IOException;

public class FileExample {
    public static void main(String[] args) {
        // إنشاء object يمثل الملف
        File file = new File("test.txt");
        
        try {
            // إنشاء الملف إذا مش موجود
            if (file.createNewFile()) {
                System.out.println("تم إنشاء الملف: " + file.getName());
            } else {
                System.out.println("الملف موجود مسبقاً");
            }
        } catch (IOException e) {
            System.out.println("حدث خطأ!");
        }
        
        // معلومات عن الملف
        System.out.println("اسم الملف: " + file.getName());
        System.out.println("المسار: " + file.getAbsolutePath());
        System.out.println("موجود؟ " + file.exists());
        System.out.println("قابل للقراءة؟ " + file.canRead());
        System.out.println("قابل للكتابة؟ " + file.canWrite());
        System.out.println("الحجم: " + file.length() + " bytes");
    }
}
                                </pre>
                            </div>
                            
                            <h4>حذف ملف:</h4>
                            <div class="code-block">
                                <pre>
File file = new File("test.txt");

if (file.delete()) {
    System.out.println("تم حذف الملف");
} else {
    System.out.println("فشل الحذف!");
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Writing Files -->
                    <div class="topic-section">
                        <h3 class="topic-title">✍️ الكتابة في ملفات</h3>
                        <div class="topic-content">
                            
                            <h4>1️⃣ باستخدام FileWriter:</h4>
                            <div class="code-block">
                                <pre>
import java.io.FileWriter;
import java.io.IOException;

public class WriteExample {
    public static void main(String[] args) {
        try {
            // false = overwrite (يمسح المحتوى القديم)
            // true = append (يضيف للمحتوى القديم)
            FileWriter writer = new FileWriter("output.txt", false);
            
            writer.write("Hello World!\n");
            writer.write("مرحباً بالعالم!\n");
            writer.write("السطر الثالث\n");
            
            writer.close();  // مهم جداً!
            System.out.println("تمت الكتابة بنجاح");
            
        } catch (IOException e) {
            System.out.println("خطأ: " + e.getMessage());
        }
    }
}
                                </pre>
                            </div>
                            
                            <h4>2️⃣ باستخدام BufferedWriter (أسرع):</h4>
                            <div class="code-block">
                                <pre>
import java.io.FileWriter;
import java.io.BufferedWriter;
import java.io.IOException;

public class BufferedWriteExample {
    public static void main(String[] args) {
        try {
            FileWriter fw = new FileWriter("data.txt");
            BufferedWriter writer = new BufferedWriter(fw);
            
            writer.write("السطر الأول");
            writer.newLine();  // سطر جديد
            writer.write("السطر الثاني");
            writer.newLine();
            writer.write("السطر الثالث");
            
            writer.close();
            System.out.println("تمت الكتابة!");
            
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
                                </pre>
                            </div>
                            
                            <h4>3️⃣ باستخدام PrintWriter (الأسهل):</h4>
                            <div class="code-block">
                                <pre>
import java.io.PrintWriter;
import java.io.IOException;

public class PrintWriterExample {
    public static void main(String[] args) {
        try {
            PrintWriter writer = new PrintWriter("students.txt");
            
            // مثل System.out بالضبط!
            writer.println("الاسم: أحمد");
            writer.println("العمر: 20");
            writer.println("المعدل: 85.5");
            writer.printf("النتيجة: %d%%\n", 95);
            
            writer.close();
            
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Reading Files -->
                    <div class="topic-section">
                        <h3 class="topic-title">📖 القراءة من ملفات</h3>
                        <div class="topic-content">
                            
                            <h4>1️⃣ باستخدام Scanner (الأسهل):</h4>
                            <div class="code-block">
                                <pre>
import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class ReadExample {
    public static void main(String[] args) {
        try {
            File file = new File("data.txt");
            Scanner reader = new Scanner(file);
            
            // قراءة سطر سطر
            while (reader.hasNextLine()) {
                String line = reader.nextLine();
                System.out.println(line);
            }
            
            reader.close();
            
        } catch (FileNotFoundException e) {
            System.out.println("الملف غير موجود!");
        }
    }
}
                                </pre>
                            </div>
                            
                            <h4>2️⃣ باستخدام BufferedReader:</h4>
                            <div class="code-block">
                                <pre>
import java.io.FileReader;
import java.io.BufferedReader;
import java.io.IOException;

public class BufferedReadExample {
    public static void main(String[] args) {
        try {
            FileReader fr = new FileReader("data.txt");
            BufferedReader reader = new BufferedReader(fr);
            
            String line;
            while ((line = reader.readLine()) != null) {
                System.out.println(line);
            }
            
            reader.close();
            
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
                                </pre>
                            </div>
                            
                            <h4>3️⃣ قراءة أرقام من ملف:</h4>
                            <div class="code-block">
                                <pre>
// محتوى الملف numbers.txt:
// 10
// 20
// 30
// 40

import java.io.File;
import java.util.Scanner;

public class ReadNumbersExample {
    public static void main(String[] args) {
        try {
            Scanner reader = new Scanner(new File("numbers.txt"));
            int sum = 0;
            int count = 0;
            
            while (reader.hasNextInt()) {
                int num = reader.nextInt();
                sum += num;
                count++;
                System.out.println("قرأنا: " + num);
            }
            
            reader.close();
            
            System.out.println("المجموع: " + sum);
            System.out.println("المتوسط: " + (double) sum / count);
            
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}

/* Output:
قرأنا: 10
قرأنا: 20
قرأنا: 30
قرأنا: 40
المجموع: 100
المتوسط: 25.0
*/
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Try-with-resources -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔄 Try-with-resources</h3>
                        <div class="topic-content">
                            <p>طريقة حديثة تغلق الملفات تلقائياً (بدون close يدوي).</p>
                            
                            <div class="code-block">
                                <pre>
import java.io.*;
import java.util.Scanner;

public class TryWithResourcesExample {
    public static void main(String[] args) {
        
        // الكتابة - الملف يُغلق تلقائياً
        try (PrintWriter writer = new PrintWriter("auto.txt")) {
            writer.println("هذا النص يُكتب تلقائياً");
            writer.println("والملف يُغلق وحده!");
        } catch (IOException e) {
            e.printStackTrace();
        }
        
        // القراءة - الملف يُغلق تلقائياً
        try (Scanner reader = new Scanner(new File("auto.txt"))) {
            while (reader.hasNextLine()) {
                System.out.println(reader.nextLine());
            }
        } catch (FileNotFoundException e) {
            System.out.println("الملف غير موجود");
        }
    }
}
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Complete Example -->
                    <div class="topic-section">
                        <h3 class="topic-title">💻 مثال شامل: نظام طلاب</h3>
                        <div class="topic-content">
                            <div class="code-block">
                                <pre>
import java.io.*;
import java.util.Scanner;
import java.util.ArrayList;

public class StudentFileSystem {
    
    // حفظ طلاب في ملف
    public static void saveStudents(ArrayList&lt;String&gt; students, String filename) {
        try (PrintWriter writer = new PrintWriter(filename)) {
            for (String student : students) {
                writer.println(student);
            }
            System.out.println("تم حفظ " + students.size() + " طالب");
        } catch (IOException e) {
            System.out.println("خطأ في الحفظ!");
        }
    }
    
    // تحميل طلاب من ملف
    public static ArrayList&lt;String&gt; loadStudents(String filename) {
        ArrayList&lt;String&gt; students = new ArrayList&lt;&gt;();
        
        try (Scanner reader = new Scanner(new File(filename))) {
            while (reader.hasNextLine()) {
                students.add(reader.nextLine());
            }
            System.out.println("تم تحميل " + students.size() + " طالب");
        } catch (FileNotFoundException e) {
            System.out.println("الملف غير موجود، سيتم إنشاء ملف جديد");
        }
        
        return students;
    }
    
    // إضافة طالب للملف
    public static void addStudent(String name, String filename) {
        try (FileWriter fw = new FileWriter(filename, true)) {  // true = append
            fw.write(name + "\n");
            System.out.println("تمت إضافة: " + name);
        } catch (IOException e) {
            System.out.println("خطأ!");
        }
    }
    
    public static void main(String[] args) {
        String filename = "students.txt";
        
        // إنشاء قائمة طلاب
        ArrayList&lt;String&gt; students = new ArrayList&lt;&gt;();
        students.add("أحمد محمد");
        students.add("سارة علي");
        students.add("محمد خالد");
        
        // حفظ في ملف
        saveStudents(students, filename);
        
        // إضافة طالب جديد
        addStudent("فاطمة أحمد", filename);
        
        // تحميل من الملف
        ArrayList&lt;String&gt; loaded = loadStudents(filename);
        
        // عرض الطلاب
        System.out.println("\nقائمة الطلاب:");
        for (int i = 0; i < loaded.size(); i++) {
            System.out.println((i + 1) + ". " + loaded.get(i));
        }
    }
}

/* Output:
تم حفظ 3 طالب
تمت إضافة: فاطمة أحمد
تم تحميل 4 طالب

قائمة الطلاب:
1. أحمد محمد
2. سارة علي
3. محمد خالد
4. فاطمة أحمد
*/
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Summary -->
                    <div class="topic-section">
                        <h3 class="topic-title">📋 ملخص File Handling</h3>
                        <div class="topic-content">
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>العملية</th>
                                            <th>الـ Classes المستخدمة</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>كتابة بسيطة</td>
                                            <td>FileWriter</td>
                                        </tr>
                                        <tr>
                                            <td>كتابة سريعة</td>
                                            <td>BufferedWriter</td>
                                        </tr>
                                        <tr>
                                            <td>كتابة سهلة</td>
                                            <td>PrintWriter (الأفضل للمبتدئين)</td>
                                        </tr>
                                        <tr>
                                            <td>قراءة سهلة</td>
                                            <td>Scanner + File</td>
                                        </tr>
                                        <tr>
                                            <td>قراءة سريعة</td>
                                            <td>BufferedReader</td>
                                        </tr>
                                        <tr>
                                            <td>معلومات الملف</td>
                                            <td>File</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="code-block" style="margin-top: 1rem;">
                                <pre>
🔑 نصائح مهمة:
• دائماً أغلق الملف بعد الانتهاء (close)
• استخدم try-with-resources للإغلاق التلقائي
• تعامل مع الـ exceptions (FileNotFoundException, IOException)
• استخدم append mode (true) للإضافة بدل الكتابة فوق
• BufferedReader/Writer أسرع للملفات الكبيرة
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item 7: Java Stream API -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">🌊</span>
                    <span class="accordion-title">Java Stream API</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- Introduction to Streams -->
                    <div class="topic-section">
                        <h3 class="topic-title">🌊 مقدمة في Stream API</h3>
                        <div class="topic-content">
                            <p><strong>ما هو Stream؟</strong> هو طريقة حديثة في Java 8+ للتعامل مع Collections (مثل List, Set) بشكل أكثر سهولة وقراءة. بدل ما نكتب loops طويلة، نستخدم methods chain!</p>
                            
                            <h4>🔑 فوائد استخدام Streams:</h4>
                            <ul class="topic-list">
                                <li>كود أقصر وأوضح</li>
                                <li>سهولة التعامل مع البيانات (filter, map, reduce)</li>
                                <li>دعم Parallel Processing للأداء العالي</li>
                                <li>Style برمجة وظيفي (Functional Programming)</li>
                            </ul>
                            
                            <h4>🔧 الـ Imports اللازمة:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;           // للـ List, Arrays, Optional
import java.util.stream.*;    // للـ Stream, Collectors
                                </pre>
                            </div>
                            
                            <h4>📊 مراحل العمل مع Stream:</h4>
                            <div class="code-block">
                                <pre>
// 1. Source (المصدر) → 2. Intermediate Operations (عمليات وسطية) → 3. Terminal Operation (عملية نهائية)

list.stream()          // 1. إنشاء Stream من List
    .filter(...)       // 2. عملية وسطية (يمكن أكثر من واحدة)
    .map(...)          // 2. عملية وسطية أخرى
    .collect(...)      // 3. عملية نهائية (تنهي الـ Stream)
                                </pre>
                            </div>
                            
                            <p style="margin-top: 1rem; padding: 0.8rem; background: rgba(102, 126, 234, 0.15); border-radius: 6px;">
                                💡 <strong>ملاحظة:</strong> الـ Stream يُستخدم مرة واحدة فقط! بعد العملية النهائية لا يمكن إعادة استخدامه.
                            </p>
                        </div>
                    </div>

                    <!-- forEach -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔄 forEach - التكرار على العناصر</h3>
                        <div class="topic-content">
                            <p><strong>ما هو forEach؟</strong> هو أبسط عملية نهائية، يُستخدم لتنفيذ action على كل عنصر في الـ Stream.</p>
                            
                            <h4>📌 مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;
import java.util.stream.*;

public class ForEachExample {
    public static void main(String[] args) {
        List&lt;Integer&gt; numbers = Arrays.asList(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        
        // طريقة 1: باستخدام Lambda
        numbers.stream().forEach(n -> System.out.println(n));
        
        // طريقة 2: باستخدام Method Reference (أقصر)
        numbers.stream().forEach(System.out::println);
        
        // طريقة 3: مباشرة بدون stream (للـ List فقط)
        numbers.forEach(System.out::println);
    }
}

/* Output:
1
2
3
4
5
6
7
8
9
10
*/
                                </pre>
                            </div>
                            
                            <h4>⚠️ تحذير مهم:</h4>
                            <p><code>forEach</code> عملية نهائية (Terminal Operation)، بعدها لا يمكن إجراء عمليات أخرى على الـ Stream!</p>
                        </div>
                    </div>

                    <!-- filter -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔍 filter - تصفية العناصر</h3>
                        <div class="topic-content">
                            <p><strong>ما هو filter؟</strong> يُستخدم لتصفية العناصر حسب شرط معين. فقط العناصر التي تحقق الشرط تمر!</p>
                            
                            <h4>📌 مثال - استخراج الأرقام الزوجية:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;
import java.util.stream.*;

public class FilterExample {
    public static void main(String[] args) {
        List&lt;Integer&gt; numbers = Arrays.asList(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        
        // تصفية الأرقام الزوجية فقط
        List&lt;Integer&gt; evenNumbers = numbers.stream()
                                            .filter(n -> n % 2 == 0)  // شرط: باقي القسمة = 0
                                            .collect(Collectors.toList());
        
        System.out.println("Even Numbers: " + evenNumbers);
    }
}

/* Output:
Even Numbers: [2, 4, 6, 8, 10]
*/
                                </pre>
                            </div>
                            
                            <h4>📌 أمثلة أخرى على filter:</h4>
                            <div class="code-block">
                                <pre>
// تصفية الأرقام الأكبر من 5
.filter(n -> n > 5)

// تصفية الأسماء التي تبدأ بحرف A
.filter(name -> name.startsWith("A"))

// تصفية الأسماء التي طولها أكبر من 3
.filter(name -> name.length() > 3)

// تصفية الأرقام الفردية
.filter(n -> n % 2 != 0)
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- map -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔄 map - تحويل العناصر</h3>
                        <div class="topic-content">
                            <p><strong>ما هو map؟</strong> يُستخدم لتحويل كل عنصر إلى شكل آخر (Transformation). مثلاً: تربيع الأرقام، تحويل النصوص لأحرف كبيرة.</p>
                            
                            <h4>📌 مثال - تربيع الأرقام:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;
import java.util.stream.*;

public class MapExample {
    public static void main(String[] args) {
        List&lt;Integer&gt; numbers = Arrays.asList(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        
        // تحويل كل رقم إلى مربعه
        List&lt;Integer&gt; squaredNumbers = numbers.stream()
                                              .map(n -> n * n)
                                              .collect(Collectors.toList());
        
        System.out.println("Squared Numbers: " + squaredNumbers);
    }
}

/* Output:
Squared Numbers: [1, 4, 9, 16, 25, 36, 49, 64, 81, 100]
*/
                                </pre>
                            </div>
                            
                            <h4>📌 أمثلة أخرى على map:</h4>
                            <div class="code-block">
                                <pre>
// تحويل الأسماء لأحرف كبيرة
List&lt;String&gt; names = Arrays.asList("ali", "sara", "omar");
names.stream()
     .map(String::toUpperCase)  // أو .map(name -> name.toUpperCase())
     .forEach(System.out::println);
// Output: ALI, SARA, OMAR

// استخراج طول كل اسم
names.stream()
     .map(String::length)  // أو .map(name -> name.length())
     .forEach(System.out::println);
// Output: 3, 4, 4

// مضاعفة كل رقم
numbers.stream()
       .map(n -> n * 2)
       .collect(Collectors.toList());
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- distinct -->
                    <div class="topic-section">
                        <h3 class="topic-title">✨ distinct - إزالة التكرارات</h3>
                        <div class="topic-content">
                            <p><strong>ما هو distinct؟</strong> يُستخدم لإزالة العناصر المكررة والحصول على عناصر فريدة فقط.</p>
                            
                            <h4>📌 مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;
import java.util.stream.*;

public class DistinctExample {
    public static void main(String[] args) {
        List&lt;Integer&gt; numbers = Arrays.asList(1, 1, 2, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        // إزالة العناصر المكررة
        List&lt;Integer&gt; distinctNumbers = numbers.stream()
                                                .distinct()
                                                .collect(Collectors.toList());

        System.out.println("Distinct Numbers: " + distinctNumbers);
    }
}

/* Output:
Distinct Numbers: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
*/
                                </pre>
                            </div>
                            
                            <h4>📌 مثال مع النصوص:</h4>
                            <div class="code-block">
                                <pre>
List&lt;String&gt; names = Arrays.asList("Ali", "Sara", "Ali", "Omar", "Sara");

List&lt;String&gt; uniqueNames = names.stream()
                                 .distinct()
                                 .collect(Collectors.toList());

System.out.println(uniqueNames);  // [Ali, Sara, Omar]
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- limit & skip -->
                    <div class="topic-section">
                        <h3 class="topic-title">📄 limit و skip - التقسيم والتخطي</h3>
                        <div class="topic-content">
                            <p><strong>limit(n):</strong> يأخذ أول n عنصر فقط</p>
                            <p><strong>skip(n):</strong> يتخطى أول n عنصر</p>
                            
                            <h4>📌 مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;
import java.util.stream.*;

public class LimitSkipExample {
    public static void main(String[] args) {
        List&lt;Integer&gt; numbers = Arrays.asList(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        
        // تخطي أول 2 عناصر، ثم أخذ 5 عناصر
        List&lt;Integer&gt; result = numbers.stream()
                                       .skip(2)    // تخطي 1, 2
                                       .limit(5)   // أخذ 5 عناصر
                                       .collect(Collectors.toList());
        
        System.out.println(result);  // [3, 4, 5, 6, 7]
    }
}
                                </pre>
                            </div>
                            
                            <h4>📊 شرح بالتفصيل:</h4>
                            <div class="code-block">
                                <pre>
القائمة الأصلية: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                  ⬇️ skip(2) - تخطي أول عنصرين
              [3, 4, 5, 6, 7, 8, 9, 10]
                  ⬇️ limit(5) - أخذ 5 عناصر فقط
              [3, 4, 5, 6, 7]
                                </pre>
                            </div>
                            
                            <h4>💡 استخدام عملي - Pagination:</h4>
                            <div class="code-block">
                                <pre>
// لعمل pagination (صفحات)
int pageSize = 10;
int pageNumber = 2;  // الصفحة الثانية (تبدأ من 0)

List&lt;Integer&gt; page = allItems.stream()
                              .skip(pageNumber * pageSize)  // تخطي الصفحات السابقة
                              .limit(pageSize)              // أخذ عناصر الصفحة الحالية
                              .collect(Collectors.toList());
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- flatMap -->
                    <div class="topic-section">
                        <h3 class="topic-title">📦 flatMap - تسطيح القوائم المتداخلة</h3>
                        <div class="topic-content">
                            <p><strong>ما هو flatMap؟</strong> يُستخدم لتحويل قائمة من القوائم (Nested Lists) إلى قائمة واحدة مسطحة.</p>
                            
                            <h4>📌 مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;
import java.util.stream.*;

public class FlatMapExample {
    public static void main(String[] args) {
        // قائمة تحتوي على قوائم (Nested)
        List&lt;List&lt;Integer&gt;&gt; nestedNumbers = Arrays.asList(
            Arrays.asList(1, 2),
            Arrays.asList(3, 4),
            Arrays.asList(5, 6)
        );

        // تسطيح القوائم المتداخلة
        List&lt;Integer&gt; flattenedNumbers = nestedNumbers.stream()
                                                      .flatMap(List::stream)
                                                      .collect(Collectors.toList());

        System.out.println("Flattened Numbers: " + flattenedNumbers);
    }
}

/* Output:
Flattened Numbers: [1, 2, 3, 4, 5, 6]
*/
                                </pre>
                            </div>
                            
                            <h4>📊 الفرق بين map و flatMap:</h4>
                            <div class="code-block">
                                <pre>
// البيانات
List&lt;List&lt;Integer&gt;&gt; nested = [[1, 2], [3, 4], [5, 6]]

// باستخدام map → نحصل على Stream of Streams
nested.stream().map(List::stream)  
// Result: Stream&lt;Stream&lt;Integer&gt;&gt; ❌ مش مفيد!

// باستخدام flatMap → نحصل على Stream واحد مسطح
nested.stream().flatMap(List::stream)  
// Result: Stream&lt;Integer&gt; → [1, 2, 3, 4, 5, 6] ✅
                                </pre>
                            </div>
                            
                            <h4>📌 الوصول للعناصر المتداخلة:</h4>
                            <div class="code-block">
                                <pre>
// للوصول لعنصر محدد في القائمة المتداخلة
int sum = nestedNumbers.get(0).get(1) + nestedNumbers.get(2).get(0);
// nestedNumbers.get(0).get(1) = 2 (من القائمة الأولى، العنصر الثاني)
// nestedNumbers.get(2).get(0) = 5 (من القائمة الثالثة، العنصر الأول)
// sum = 2 + 5 = 7
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- reduce -->
                    <div class="topic-section">
                        <h3 class="topic-title">➕ reduce - تجميع العناصر</h3>
                        <div class="topic-content">
                            <p><strong>ما هو reduce؟</strong> يُستخدم لتجميع كل عناصر الـ Stream في قيمة واحدة (مثل: المجموع، الضرب، أكبر قيمة).</p>
                            
                            <h4>📌 مثال - حساب المجموع:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;
import java.util.stream.*;

public class ReduceExample {
    public static void main(String[] args) {
        List&lt;Integer&gt; numbers = Arrays.asList(1, 2, 3, 4, 5);

        // حساب مجموع الأرقام
        int sum = numbers.stream()
                         .reduce(0, (a, b) -> a + b);
        // 0 = القيمة الابتدائية
        // (a, b) -> a + b = العملية (جمع عنصرين)

        System.out.println("Sum of numbers: " + sum);  // 15
    }
}
                                </pre>
                            </div>
                            
                            <h4>📊 كيف يعمل reduce خطوة بخطوة:</h4>
                            <div class="code-block">
                                <pre>
numbers = [1, 2, 3, 4, 5]
reduce(0, (a, b) -> a + b)

Step 1: a=0, b=1 → 0 + 1 = 1
Step 2: a=1, b=2 → 1 + 2 = 3
Step 3: a=3, b=3 → 3 + 3 = 6
Step 4: a=6, b=4 → 6 + 4 = 10
Step 5: a=10, b=5 → 10 + 5 = 15 ✅
                                </pre>
                            </div>
                            
                            <h4>📌 أمثلة أخرى على reduce:</h4>
                            <div class="code-block">
                                <pre>
// حساب حاصل الضرب
int product = numbers.stream()
                     .reduce(1, (a, b) -> a * b);  // 120

// إيجاد أكبر قيمة
int max = numbers.stream()
                 .reduce(Integer.MIN_VALUE, (a, b) -> a > b ? a : b);

// دمج النصوص
List&lt;String&gt; words = Arrays.asList("Hello", " ", "World");
String sentence = words.stream()
                       .reduce("", (a, b) -> a + b);  // "Hello World"
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- find -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔎 findFirst و findAny - البحث عن عنصر</h3>
                        <div class="topic-content">
                            <p><strong>findFirst():</strong> يُرجع أول عنصر في الـ Stream</p>
                            <p><strong>findAny():</strong> يُرجع أي عنصر (مفيد في Parallel Streams)</p>
                            
                            <h4>📌 مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;

public class FindExample {
    public static void main(String[] args) {
        List&lt;String&gt; names = Arrays.asList("Sara", "Ali", "Mona", "Ahmed");

        // البحث عن أول عنصر
        Optional&lt;String&gt; firstName = names.stream().findFirst();
        System.out.println(firstName.get());  // Sara

        // البحث عن أي عنصر
        Optional&lt;String&gt; anyName = names.stream().findAny();
        System.out.println(anyName.get());  // Sara (في العادة)

        // البحث عن أول اسم يبدأ بحرف 'A'
        Optional&lt;String&gt; nameStartsWithA = names.stream()
            .filter(name -> name.startsWith("A"))
            .findFirst();
        
        // التحقق من وجود النتيجة
        if (nameStartsWithA.isPresent()) {
            System.out.println("Found: " + nameStartsWithA.get());  // Ali
        }
        
        // أو باستخدام orElse
        String result = nameStartsWithA.orElse("Not Found");
    }
}
                                </pre>
                            </div>
                            
                            <h4>📦 ما هو Optional؟</h4>
                            <p><code>Optional</code> هو wrapper يحتوي على القيمة أو يكون فارغ. يُستخدم لتجنب NullPointerException.</p>
                            <div class="code-block">
                                <pre>
Optional&lt;String&gt; opt = ...;

opt.get()              // يُرجع القيمة (خطر لو فارغ!)
opt.isPresent()        // true لو فيه قيمة
opt.orElse("default")  // يُرجع القيمة أو الـ default
opt.ifPresent(v -> ..) // ينفذ code لو فيه قيمة
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- match -->
                    <div class="topic-section">
                        <h3 class="topic-title">✅ anyMatch, allMatch, noneMatch - التحقق من الشروط</h3>
                        <div class="topic-content">
                            <p><strong>anyMatch:</strong> هل يوجد على الأقل عنصر واحد يحقق الشرط؟</p>
                            <p><strong>allMatch:</strong> هل كل العناصر تحقق الشرط؟</p>
                            <p><strong>noneMatch:</strong> هل لا يوجد أي عنصر يحقق الشرط؟</p>
                            
                            <h4>📌 مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;

public class MatchExample {
    public static void main(String[] args) {
        List&lt;Integer&gt; numbers = Arrays.asList(3, 7, 10, 15, 18);

        // هل يوجد رقم زوجي واحد على الأقل؟
        boolean anyEven = numbers.stream().anyMatch(n -> n % 2 == 0);
        System.out.println("Any even? " + anyEven);  // true (10 و 18)

        // هل كل الأرقام أقل من 20؟
        boolean allLessThan20 = numbers.stream().allMatch(n -> n < 20);
        System.out.println("All &lt; 20? " + allLessThan20);  // true

        // هل لا يوجد رقم أكبر من 30؟
        boolean noneGreaterThan30 = numbers.stream().noneMatch(n -> n > 30);
        System.out.println("None > 30? " + noneGreaterThan30);  // true
    }
}
                                </pre>
                            </div>
                            
                            <h4>📊 جدول مقارنة:</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Method</th>
                                            <th>السؤال</th>
                                            <th>النتيجة</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>anyMatch</td>
                                            <td style="text-align: right; direction: rtl;">هل يوجد عنصر واحد على الأقل يحقق الشرط؟</td>
                                            <td style="text-align: center;">true / false</td>
                                        </tr>
                                        <tr>
                                            <td>allMatch</td>
                                            <td style="text-align: right; direction: rtl;">هل كل العناصر تحقق الشرط؟</td>
                                            <td style="text-align: center;">true / false</td>
                                        </tr>
                                        <tr>
                                            <td>noneMatch</td>
                                            <td style="text-align: right; direction: rtl;">هل لا يوجد أي عنصر يحقق الشرط؟</td>
                                            <td style="text-align: center;">true / false</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- peek -->
                    <div class="topic-section">
                        <h3 class="topic-title">👁️ peek - مراقبة الـ Stream (Debugging)</h3>
                        <div class="topic-content">
                            <p><strong>ما هو peek؟</strong> يُستخدم لمراقبة العناصر أثناء مرورها في الـ Stream بدون تغييرها. مفيد جداً للـ debugging!</p>
                            
                            <h4>📌 مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;

public class PeekExample {
    public static void main(String[] args) {
        List&lt;String&gt; names = Arrays.asList("Ali", "Hana", "Omar");
        
        names.stream()
             .filter(name -> name.startsWith("A"))
             .peek(name -> System.out.println("After filter: " + name))
             .map(String::toUpperCase)
             .peek(name -> System.out.println("After map: " + name))
             .forEach(System.out::println);
    }
}

/* Output:
After filter: Ali
After map: ALI
ALI
*/
                                </pre>
                            </div>
                            
                            <h4>⚠️ الفرق بين peek و forEach:</h4>
                            <div class="code-block">
                                <pre>
peek:
  - عملية وسطية (Intermediate)
  - يمكن إضافة عمليات بعدها
  - للمراقبة والـ debugging

forEach:
  - عملية نهائية (Terminal)
  - لا يمكن إضافة عمليات بعدها
  - لتنفيذ action على كل عنصر
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- collect & groupingBy -->
                    <div class="topic-section">
                        <h3 class="topic-title">📊 collect و groupingBy - جمع النتائج</h3>
                        <div class="topic-content">
                            <p><strong>collect:</strong> يُستخدم لتحويل الـ Stream إلى Collection أو قيمة أخرى</p>
                            <p><strong>groupingBy:</strong> يُستخدم لتجميع العناصر حسب معيار معين</p>
                            
                            <h4>📌 مثال على collect:</h4>
                            <div class="code-block">
                                <pre>
// تحويل إلى List
List&lt;Integer&gt; list = stream.collect(Collectors.toList());

// تحويل إلى Set (يزيل التكرارات)
Set&lt;Integer&gt; set = stream.collect(Collectors.toSet());

// دمج النصوص
String joined = names.stream()
                     .collect(Collectors.joining(", "));  // "Ali, Sara, Omar"
                                </pre>
                            </div>
                            
                            <h4>📌 مثال على groupingBy:</h4>
                            <div class="code-block">
                                <pre>
import java.nio.file.*;
import java.io.IOException;
import java.util.*;
import java.util.stream.Collectors;

public class GroupingByExample {
    // تعريف record للشخص (Java 16+)
    public record Person(String name, String country) {}

    public static void main(String[] args) throws IOException {
        // قراءة البيانات من ملف CSV
        List&lt;Person&gt; people = Files.lines(Path.of("people.csv"))
                                .map(line -> line.split(","))
                                .map(parts -> new Person(parts[0], parts[1]))
                                .collect(Collectors.toList());

        // تجميع الأشخاص حسب البلد
        Map&lt;String, List&lt;Person&gt;&gt; peopleByCountry = people.stream()
                .collect(Collectors.groupingBy(Person::country));

        // طباعة النتائج
        peopleByCountry.forEach((country, persons) -> {
            System.out.println(country + " -> " + persons);
        });
    }
}

/* ملف people.csv:
Ali,Egypt
Sara,Egypt
John,USA
Marie,France
*/

/* Output:
Egypt -> [Person[name=Ali, country=Egypt], Person[name=Sara, country=Egypt]]
USA -> [Person[name=John, country=USA]]
France -> [Person[name=Marie, country=France]]
*/
                                </pre>
                            </div>
                            
                            <h4>📌 Collectors أخرى مفيدة:</h4>
                            <div class="code-block">
                                <pre>
Collectors.toList()      // تحويل لـ List
Collectors.toSet()       // تحويل لـ Set
Collectors.joining(",")  // دمج النصوص
Collectors.counting()    // عد العناصر
Collectors.summingInt()  // مجموع الأرقام
Collectors.averagingInt()// متوسط الأرقام
Collectors.groupingBy()  // تجميع حسب معيار
Collectors.partitioningBy() // تقسيم لـ true/false
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- removeIf -->
                    <div class="topic-section">
                        <h3 class="topic-title">❌ removeIf - حذف عناصر من List</h3>
                        <div class="topic-content">
                            <p><strong>ما هو removeIf؟</strong> هو method في Collection (مش Stream) يُستخدم لحذف العناصر التي تحقق شرط معين مباشرة من القائمة الأصلية.</p>
                            
                            <h4>⚠️ ملاحظة مهمة:</h4>
                            <p><code>removeIf</code> يعدل على القائمة الأصلية! ويعمل فقط على Mutable Lists (مثل ArrayList).</p>
                            
                            <h4>📌 مثال:</h4>
                            <div class="code-block">
                                <pre>
import java.util.*;

public class RemoveIfExample {
    public static void main(String[] args) {
        // ⚠️ لازم تكون ArrayList وليس Arrays.asList
        List&lt;Integer&gt; numbers = new ArrayList&lt;&gt;(
            Arrays.asList(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
        );
        
        System.out.println("Before: " + numbers);
        // Before: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
        
        // حذف الأرقام الزوجية
        numbers.removeIf(n -> n % 2 == 0);
        
        System.out.println("After: " + numbers);
        // After: [1, 3, 5, 7, 9]
        
        // حساب مجموع الباقي
        int sum = numbers.stream()
                         .reduce(0, (a, b) -> a + b);
        System.out.println("Sum: " + sum);  // 25
    }
}
                                </pre>
                            </div>
                            
                            <h4>📊 الفرق بين removeIf و filter:</h4>
                            <div class="code-block">
                                <pre>
removeIf:
  - يعدل على القائمة الأصلية ✏️
  - method في Collection
  - يحذف العناصر التي تحقق الشرط

filter:
  - لا يعدل القائمة الأصلية (Immutable) 🔒
  - method في Stream
  - يحتفظ بالعناصر التي تحقق الشرط
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Stream Summary -->
                    <div class="topic-section">
                        <h3 class="topic-title">📋 ملخص Stream API</h3>
                        <div class="topic-content">
                            <h4>العمليات الوسطية (Intermediate):</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Operation</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>filter()</td>
                                            <td>تصفية العناصر</td>
                                        </tr>
                                        <tr>
                                            <td>map()</td>
                                            <td>تحويل العناصر</td>
                                        </tr>
                                        <tr>
                                            <td>flatMap()</td>
                                            <td>تسطيح القوائم المتداخلة</td>
                                        </tr>
                                        <tr>
                                            <td>distinct()</td>
                                            <td>إزالة التكرارات</td>
                                        </tr>
                                        <tr>
                                            <td>sorted()</td>
                                            <td>ترتيب العناصر</td>
                                        </tr>
                                        <tr>
                                            <td>limit(n)</td>
                                            <td>أخذ أول n عنصر</td>
                                        </tr>
                                        <tr>
                                            <td>skip(n)</td>
                                            <td>تخطي أول n عنصر</td>
                                        </tr>
                                        <tr>
                                            <td>peek()</td>
                                            <td>مراقبة (للـ debugging)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <h4>العمليات النهائية (Terminal):</h4>
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Operation</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>forEach()</td>
                                            <td>تنفيذ action على كل عنصر</td>
                                        </tr>
                                        <tr>
                                            <td>collect()</td>
                                            <td>تجميع النتائج</td>
                                        </tr>
                                        <tr>
                                            <td>reduce()</td>
                                            <td>تجميع في قيمة واحدة</td>
                                        </tr>
                                        <tr>
                                            <td>count()</td>
                                            <td>عد العناصر</td>
                                        </tr>
                                        <tr>
                                            <td>findFirst() / findAny()</td>
                                            <td>البحث عن عنصر</td>
                                        </tr>
                                        <tr>
                                            <td>anyMatch() / allMatch() / noneMatch()</td>
                                            <td>التحقق من شروط</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <h4>🔥 مثال شامل:</h4>
                            <div class="code-block">
                                <pre>
List&lt;Integer&gt; numbers = Arrays.asList(1, 2, 2, 3, 4, 5, 6, 7, 8, 9, 10);

int result = numbers.stream()
    .filter(n -> n % 2 == 0)      // [2, 2, 4, 6, 8, 10]
    .distinct()                    // [2, 4, 6, 8, 10]
    .map(n -> n * 2)               // [4, 8, 12, 16, 20]
    .limit(3)                      // [4, 8, 12]
    .reduce(0, (a, b) -> a + b);   // 24

System.out.println(result);  // 24
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- More accordions can be added here -->
            
        </div>

        <!-- SQL Materials Section -->
        <div class="materials-section" style="margin-top: 4rem;">
            <h2 class="section-main-title">
                <svg width="48" height="48" viewBox="0 0 24 24" style="vertical-align: middle; margin-right: 10px;" fill="none">
                    <ellipse cx="12" cy="6" rx="8" ry="3" stroke="#00618A" stroke-width="2" fill="rgba(0, 97, 138, 0.3)"/>
                    <path d="M4 6v6c0 1.657 3.582 3 8 3s8-1.343 8-3V6" stroke="#00618A" stroke-width="2"/>
                    <path d="M4 12v6c0 1.657 3.582 3 8 3s8-1.343 8-3v-6" stroke="#00618A" stroke-width="2"/>
                </svg>
                SQL Materials
            </h2>

            <!-- Accordion Item: SQL Fundamentals -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">🗄️</span>
                    <span class="accordion-title">SQL Fundamentals - الأساسيات</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- What is SQL -->
                    <div class="topic-section">
                        <h3 class="topic-title">📚 ما هو SQL؟</h3>
                        <div class="topic-content">
                            <p><strong>SQL = Structured Query Language</strong> هي لغة برمجة خاصة بقواعد البيانات. تستخدم للتعامل مع البيانات المخزنة في قواعد البيانات العلائقية (Relational Databases).</p>
                            
                            <h4>🔑 ما الذي يمكنك فعله بـ SQL؟</h4>
                            <ul class="topic-list">
                                <li>إنشاء قواعد بيانات وجداول جديدة</li>
                                <li>إدخال بيانات جديدة (Insert)</li>
                                <li>استعلام واسترجاع البيانات (Select)</li>
                                <li>تحديث البيانات الموجودة (Update)</li>
                                <li>حذف البيانات (Delete)</li>
                                <li>إنشاء علاقات بين الجداول (Foreign Keys)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- CREATE DATABASE -->
                    <div class="topic-section">
                        <h3 class="topic-title">🏗️ CREATE DATABASE - إنشاء قاعدة بيانات</h3>
                        <div class="topic-content">
                            <p><strong>CREATE DATABASE</strong> يُستخدم لإنشاء قاعدة بيانات جديدة.</p>
                            
                            <h4>📌 الصيغة الأساسية:</h4>
                            <div class="code-block">
                                <pre>
-- إنشاء قاعدة بيانات جديدة
CREATE DATABASE university;

-- استخدام قاعدة البيانات
USE university;
                                </pre>
                            </div>
                            
                            <p style="margin-top: 1rem; padding: 0.8rem; background: rgba(102, 126, 234, 0.15); border-radius: 6px;">
                                💡 <strong>ملاحظة:</strong> بعد إنشاء قاعدة البيانات، لازم تستخدم <code>USE</code> عشان تبدأ تشتغل عليها.
                            </p>
                        </div>
                    </div>

                    <!-- CREATE TABLE -->
                    <div class="topic-section">
                        <h3 class="topic-title">📋 CREATE TABLE - إنشاء جدول</h3>
                        <div class="topic-content">
                            <p><strong>CREATE TABLE</strong> يُستخدم لإنشاء جدول جديد داخل قاعدة البيانات.</p>
                            
                            <h4>📌 مثال - إنشاء جدول الطلاب:</h4>
                            <div class="code-block">
                                <pre>
CREATE TABLE Students (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    First_Name VARCHAR(20) NOT NULL,
    Last_Name VARCHAR(20) NOT NULL,
    Age INT NOT NULL,
    Address VARCHAR(50)
);
                                </pre>
                            </div>
                            
                            <h4>📋 شرح الأنواع والقيود:</h4>
                            <ul class="topic-list">
                                <li><code>INT</code> → رقم صحيح</li>
                                <li><code>VARCHAR(n)</code> → نص بطول أقصى n حرف</li>
                                <li><code>NOT NULL</code> → الحقل إجباري (لا يقبل قيمة فارغة)</li>
                                <li><code>AUTO_INCREMENT</code> → الرقم يزيد تلقائياً</li>
                                <li><code>PRIMARY KEY</code> → المفتاح الأساسي (فريد لكل صف)</li>
                            </ul>
                            
                            <h4>📌 مثال - إنشاء جدول المدرسين:</h4>
                            <div class="code-block">
                                <pre>
CREATE TABLE Teachers ( 
    Teacher_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    First_Name VARCHAR(20) NOT NULL,
    Last_Name VARCHAR(20) NOT NULL,
    Age INT NOT NULL,
    Address VARCHAR(50)
);
                                </pre>
                            </div>
                            
                            <h4>📌 مثال - إنشاء جدول المواد:</h4>
                            <div class="code-block">
                                <pre>
CREATE TABLE Courses (
    Course_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Course_Name VARCHAR(50)
);
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- FOREIGN KEY -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔗 FOREIGN KEY - الفورين كي</h3>
                        <div class="topic-content">
                            <p><strong>FOREIGN KEY</strong> يُستخدم لربط جدول بآخر. يشير لـ Primary Key في جدول آخر.</p>
                            
                            <h4>📌 مثال - جدول التسجيل (Enrollment):</h4>
                            <div class="code-block">
                                <pre>
CREATE TABLE Enrollment (
    Enroll_ID INT AUTO_INCREMENT PRIMARY KEY,
    Student_ID INT,
    Course_ID INT,
    FOREIGN KEY (Student_ID) REFERENCES Students(ID),
    FOREIGN KEY (Course_ID) REFERENCES Courses(Course_ID)
);
                                </pre>
                            </div>
                            
                            <p style="margin-top: 1rem; padding: 0.8rem; background: rgba(255, 193, 7, 0.15); border-radius: 6px;">
                                ⚠️ <strong>مهم:</strong> الـ FOREIGN KEY بيتأكد إن القيمة موجودة في الجدول الأساسي. لو حاولت تدخل Student_ID مش موجود في جدول Students، هيرفض!
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item: INSERT & SELECT -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">📝</span>
                    <span class="accordion-title">INSERT & SELECT - الإنسرت والسيليكت</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- INSERT -->
                    <div class="topic-section">
                        <h3 class="topic-title">➕ INSERT INTO - إضافة بيانات</h3>
                        <div class="topic-content">
                            <p><strong>INSERT INTO</strong> يُستخدم لإضافة صفوف جديدة في الجدول.</p>
                            
                            <h4>📌 إضافة صف واحد:</h4>
                            <div class="code-block">
                                <pre>
INSERT INTO Students (First_Name, Last_Name, Age, Address)
VALUES ('Ahmed', 'Mohamed', 21, 'Cairo');
                                </pre>
                            </div>
                            
                            <h4>📌 إضافة عدة صفوف:</h4>
                            <div class="code-block">
                                <pre>
INSERT INTO Students (First_Name, Last_Name, Age, Address)
VALUES
    ('Omar', 'Hassan', 21, 'Alexandria'),
    ('Sara', 'Ali', 22, 'Giza'),
    ('Youssef', 'Ibrahim', 23, 'Cairo'),
    ('Mariam', 'Khaled', 22, 'Mansoura'),
    ('Hassan', 'Mahmoud', 23, 'Aswan'),
    ('Fatima', 'Ahmed', 21, 'Luxor');
                                </pre>
                            </div>
                            
                            <h4>📌 إضافة مدرسين:</h4>
                            <div class="code-block">
                                <pre>
INSERT INTO Teachers (First_Name, Last_Name, Age, Address)
VALUES
    ('Dr_Mahmoud', 'Samir', 54, 'Cairo'),
    ('Dr_Hamed', 'Mostafa', 45, 'Alexandria');
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- SELECT -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔍 SELECT - استعلام البيانات</h3>
                        <div class="topic-content">
                            <p><strong>SELECT</strong> يُستخدم لاسترجاع البيانات من الجدول.</p>
                            
                            <h4>📌 استرجاع كل البيانات:</h4>
                            <div class="code-block">
                                <pre>
-- الـ * تعني "كل الأعمدة"
SELECT * FROM Students;
                                </pre>
                            </div>
                            
                            <h4>📌 استرجاع أعمدة محددة:</h4>
                            <div class="code-block">
                                <pre>
SELECT First_Name, Last_Name FROM Students;
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item: WHERE Clause -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">🎯</span>
                    <span class="accordion-title">WHERE Clause - الوير كلوز</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- Basic WHERE -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔍 WHERE - الشرط الأساسي</h3>
                        <div class="topic-content">
                            <p><strong>WHERE</strong> يُستخدم لتصفية النتائج حسب شرط معين.</p>
                            
                            <h4>📌 مقارنة بسيطة:</h4>
                            <div class="code-block">
                                <pre>
-- الطلاب الأكبر من 20 سنة
SELECT * FROM Students 
WHERE Age > 20;

-- الطلاب بعمر 22 سنة بالضبط
SELECT * FROM Students 
WHERE Age = 22;
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- BETWEEN -->
                    <div class="topic-section">
                        <h3 class="topic-title">📊 BETWEEN - البتوين</h3>
                        <div class="topic-content">
                            <p><strong>BETWEEN</strong> يُستخدم للبحث عن قيم ضمن نطاق معين (شاملة الحدين).</p>
                            
                            <div class="code-block">
                                <pre>
-- الطلاب بين 20 و 22 سنة
SELECT First_Name, Last_Name FROM Students
WHERE Age BETWEEN 20 AND 22;
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- AND & OR -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔀 AND & OR - الشروط المتعددة</h3>
                        <div class="topic-content">
                            <p><strong>AND</strong> = كل الشروط لازم تتحقق | <strong>OR</strong> = شرط واحد على الأقل يتحقق</p>
                            
                            <h4>📌 استخدام OR:</h4>
                            <div class="code-block">
                                <pre>
-- الطلاب الأكبر من 20 أو الذين عمرهم 21
SELECT * FROM Students 
WHERE Age > 20 OR Age = 21;
                                </pre>
                            </div>
                            
                            <h4>📌 استخدام AND:</h4>
                            <div class="code-block">
                                <pre>
-- الطلاب الأكبر من 20 ومن القاهرة
SELECT * FROM Students 
WHERE Age > 20 AND Address = 'Cairo';
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- IN -->
                    <div class="topic-section">
                        <h3 class="topic-title">📋 IN - قائمة القيم</h3>
                        <div class="topic-content">
                            <p><strong>IN</strong> يُستخدم للبحث عن قيم ضمن قائمة محددة.</p>
                            
                            <div class="code-block">
                                <pre>
-- الطلاب بعمر 20 أو 22
SELECT * FROM Students 
WHERE Age IN (20, 22);

-- بدلاً من كتابة: WHERE Age = 20 OR Age = 22
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- NULL -->
                    <div class="topic-section">
                        <h3 class="topic-title">❓ IS NULL / IS NOT NULL</h3>
                        <div class="topic-content">
                            <p>للبحث عن القيم الفارغة أو غير الفارغة.</p>
                            
                            <div class="code-block">
                                <pre>
-- الطلاب بدون عنوان
SELECT * FROM Students 
WHERE Address IS NULL;

-- الطلاب اللي عندهم عنوان
SELECT * FROM Students 
WHERE Address IS NOT NULL;
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item: LIKE Pattern Matching -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">🔎</span>
                    <span class="accordion-title">LIKE - اللايك</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <div class="topic-section">
                        <h3 class="topic-title">🔎 LIKE - البحث النصي</h3>
                        <div class="topic-content">
                            <p><strong>LIKE</strong> يُستخدم للبحث عن أنماط معينة في النصوص.</p>
                            
                            <h4>📋 الرموز الخاصة:</h4>
                            <ul class="topic-list">
                                <li><code>%</code> → يمثل أي عدد من الحروف (صفر أو أكثر)</li>
                                <li><code>_</code> → يمثل حرف واحد فقط</li>
                            </ul>
                            
                            <h4>📌 أمثلة على %:</h4>
                            <div class="code-block">
                                <pre>
-- الأسماء التي تبدأ بـ A
SELECT * FROM Students
WHERE First_Name LIKE 'A%';

-- الأسماء التي تنتهي بـ d
SELECT * FROM Students
WHERE First_Name LIKE '%d';

-- الأسماء التي تحتوي على 'am'
SELECT * FROM Students
WHERE First_Name LIKE '%am%';

-- العناوين التي تبدأ بـ C وتنتهي بـ o
SELECT * FROM Students 
WHERE Address LIKE 'C%o';
                                </pre>
                            </div>
                            
                            <h4>📌 أمثلة على _ (underscore):</h4>
                            <div class="code-block">
                                <pre>
-- الأسماء المكونة من 4 حروف تبدأ بـ S
SELECT * FROM Students
WHERE First_Name LIKE 'S___';

-- الأسماء التي ثاني حرف فيها r
SELECT * FROM Students
WHERE First_Name LIKE '_r%';
                                </pre>
                            </div>
                            
                            <h4>📌 COUNT مع LIKE:</h4>
                            <div class="code-block">
                                <pre>
-- عدد الطلاب اللي اسمهم بيبدأ بـ A
SELECT COUNT(First_Name) AS Students_Starting_With_A 
FROM Students
WHERE First_Name LIKE 'A%';
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item: Aggregate Functions -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">📊</span>
                    <span class="accordion-title">Aggregate Functions - الأجريجيت فانكشنز</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <div class="topic-section">
                        <h3 class="topic-title">📊 دوال التجميع الأساسية</h3>
                        <div class="topic-content">
                            <p>دوال التجميع تُستخدم لإجراء حسابات على مجموعة من القيم وترجع قيمة واحدة.</p>
                            
                            <h4>📌 COUNT - العد:</h4>
                            <div class="code-block">
                                <pre>
-- عدد الطلاب الكلي
SELECT COUNT(*) AS Total_Students 
FROM Students;

-- عدد الطلاب اللي عندهم عنوان
SELECT COUNT(Address) AS Students_With_Address 
FROM Students;
                                </pre>
                            </div>
                            
                            <h4>📌 SUM - المجموع:</h4>
                            <div class="code-block">
                                <pre>
-- مجموع أعمار كل الطلاب
SELECT SUM(Age) AS Total_Age 
FROM Students;
                                </pre>
                            </div>
                            
                            <h4>📌 AVG - المتوسط:</h4>
                            <div class="code-block">
                                <pre>
-- متوسط أعمار الطلاب
SELECT AVG(Age) AS Average_Age 
FROM Students;
                                </pre>
                            </div>
                            
                            <h4>📌 MIN & MAX - الأصغر والأكبر:</h4>
                            <div class="code-block">
                                <pre>
-- أصغر عمر
SELECT MIN(Age) AS Youngest_Age 
FROM Students;

-- أكبر عمر
SELECT MAX(Age) AS Oldest_Age 
FROM Students;
                                </pre>
                            </div>
                            
                            <p style="margin-top: 1rem; padding: 0.8rem; background: rgba(102, 126, 234, 0.15); border-radius: 6px;">
                                💡 <strong>ملاحظة:</strong> استخدم <code>AS</code> لإعطاء اسم مستعار (Alias) للنتيجة عشان تكون واضحة.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item: ORDER BY & LIMIT -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">📑</span>
                    <span class="accordion-title">ORDER BY & LIMIT - الأوردر باي والليمت</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <!-- ORDER BY -->
                    <div class="topic-section">
                        <h3 class="topic-title">📤 ORDER BY - الأوردر باي</h3>
                        <div class="topic-content">
                            <p><strong>ORDER BY</strong> يُستخدم لترتيب النتائج تصاعدياً أو تنازلياً.</p>
                            
                            <h4>📌 ترتيب تصاعدي (ASC - الافتراضي):</h4>
                            <div class="code-block">
                                <pre>
-- ترتيب حسب العمر من الأصغر للأكبر
SELECT Age FROM Students 
ORDER BY Age;

-- أو بشكل صريح
SELECT Age FROM Students 
ORDER BY Age ASC;
                                </pre>
                            </div>
                            
                            <h4>📌 ترتيب تنازلي (DESC):</h4>
                            <div class="code-block">
                                <pre>
-- ترتيب حسب العمر من الأكبر للأصغر
SELECT First_Name FROM Students 
ORDER BY Age DESC;
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- LIMIT -->
                    <div class="topic-section">
                        <h3 class="topic-title">🔢 LIMIT - الليمت</h3>
                        <div class="topic-content">
                            <p><strong>LIMIT</strong> يُستخدم لتحديد عدد الصفوف المسترجعة.</p>
                            
                            <h4>📌 أمثلة:</h4>
                            <div class="code-block">
                                <pre>
-- أول طالب فقط
SELECT * FROM Students 
LIMIT 1;

-- أول 5 طلاب
SELECT * FROM Students 
LIMIT 5;

-- أكبر 3 طلاب سناً
SELECT * FROM Students 
ORDER BY Age DESC
LIMIT 3;
                                </pre>
                            </div>
                        </div>
                    </div>

                    <!-- Combined Example -->
                    <div class="topic-section">
                        <h3 class="topic-title">🎯 مثال متقدم - دمج كل الأوامر</h3>
                        <div class="topic-content">
                            <div class="code-block">
                                <pre>
-- استعلام معقد يجمع عدة مفاهيم:
-- الطلاب أقل من 23 سنة
-- اسمهم الأول يبدأ بـ A
-- اسمهم الأخير يبدأ بـ M
-- فقط أول نتيجة

SELECT * FROM Students 
WHERE Age < 23 
AND First_Name LIKE 'A%' 
AND Last_Name LIKE 'M%' 
LIMIT 1;


-- مثال آخر: الأطباء في تخصص Cardiology أو اسمهم يبدأ بـ S
SELECT * FROM Doctors 
WHERE First_Name LIKE 'S%' 
OR Specialization = 'Cardiology';

-- أقصى خبرة للأطباء
SELECT MAX(Experience) AS Max_Experience
FROM Doctors;
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SQL Quick Reference -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <span class="accordion-icon">📚</span>
                    <span class="accordion-title">SQL Quick Reference - مرجع سريع</span>
                    <span class="accordion-arrow">▼</span>
                </div>
                <div class="accordion-content">
                    
                    <div class="topic-section">
                        <h3 class="topic-title">📋 ملخص الأوامر</h3>
                        <div class="topic-content">
                            <div class="terminal-table-container">
                                <table class="terminal-table">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Command</th>
                                            <th>Usage / Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- DDL -->
                                        <tr>
                                            <td rowspan="4"><strong>DDL</strong><br>(Definition)</td>
                                            <td>CREATE DATABASE</td>
                                            <td>إنشاء قاعدة بيانات</td>
                                        </tr>
                                        <tr>
                                            <td>USE</td>
                                            <td>استخدام قاعدة بيانات</td>
                                        </tr>
                                        <tr>
                                            <td>CREATE TABLE</td>
                                            <td>إنشاء جدول</td>
                                        </tr>
                                        <tr>
                                            <td>DROP TABLE</td>
                                            <td>حذف جدول</td>
                                        </tr>
                                        
                                        <!-- DML -->
                                        <tr>
                                            <td rowspan="4"><strong>DML</strong><br>(Manipulation)</td>
                                            <td>INSERT INTO</td>
                                            <td>إضافة بيانات</td>
                                        </tr>
                                        <tr>
                                            <td>SELECT</td>
                                            <td>استعلام عن بيانات</td>
                                        </tr>
                                        <tr>
                                            <td>UPDATE</td>
                                            <td>تحديث بيانات</td>
                                        </tr>
                                        <tr>
                                            <td>DELETE</td>
                                            <td>حذف بيانات</td>
                                        </tr>

                                        <!-- WHERE -->
                                        <tr>
                                            <td rowspan="4"><strong>Conditions</strong></td>
                                            <td>=, !=, &lt;, &gt;</td>
                                            <td>مقارنات</td>
                                        </tr>
                                        <tr>
                                            <td>BETWEEN, IN</td>
                                            <td>نطاق / قائمة قيم</td>
                                        </tr>
                                        <tr>
                                            <td>LIKE</td>
                                            <td>أنماط نصية</td>
                                        </tr>
                                        <tr>
                                            <td>IS NULL</td>
                                            <td>قيم فارغة</td>
                                        </tr>

                                        <!-- Aggregate -->
                                        <tr>
                                            <td rowspan="2"><strong>Aggregate</strong></td>
                                            <td>COUNT, SUM, AVG</td>
                                            <td>إحصائيات</td>
                                        </tr>
                                        <tr>
                                            <td>MIN, MAX</td>
                                            <td>أصغر/أكبر قيمة</td>
                                        </tr>
                                        
                                        <!-- Other -->
                                        <tr>
                                            <td rowspan="3"><strong>Other</strong></td>
                                            <td>ORDER BY</td>
                                            <td>ترتيب النتائج</td>
                                        </tr>
                                        <tr>
                                            <td>LIMIT</td>
                                            <td>تحديد عدد النتائج</td>
                                        </tr>
                                        <tr>
                                            <td>KEYS</td>
                                            <td>Primary / Foreign Keys</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section footer-brand">
                <h3>ClassHub</h3>
                <p>Computer Science College Class Hub</p>
                <p class="footer-developer">Developed by - Faris Nabil</p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <div class="footer-dropdown" id="footerLecturesDropdown">
                        <a href="#lectures" class="footer-dropdown-toggle">
                            Lectures <span class="footer-dropdown-arrow">▼</span>
                        </a>
                        <div class="footer-dropdown-menu">
                            <a href="first.php">First Year</a>
                            <a href="second.php">Second Year</a>
                            <a href="previous-semesters.php">Previous Semesters</a>
                        </div>
                    </div>
                    <a href="programming.php">Programming</a>
                    <a href="communities.php">Communities</a>
                    <a href="schedule.php">Schedule</a>
                    <a href="contact.html">Contact</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Join Us</h3>
                <a href="https://chat.whatsapp.com/IdDaqDZNSZQ3YF375tYBHU" class="whatsapp-link" target="_blank">
                    <span class="whatsapp-icon">💬</span>
                    WhatsApp Group
                </a>
            </div>
        </div>
        
        <div class="footer-bottom">
            © <?php echo date("Y"); ?> ClassHub. Built with ❤️ for students, by students.
        </div>
    </footer>

    <div class="scroll-to-top" id="scrollToTop">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
        </svg>
    </div>

    <script>
        function scrollToHome() { window.location.href = 'index.php'; }
        
        const lecturesDropdown = document.getElementById('lecturesDropdown');
        if(lecturesDropdown) {
            const dropdownToggle = lecturesDropdown.querySelector('.dropdown-toggle');
            dropdownToggle.addEventListener('click', (e) => {
                e.preventDefault();
                lecturesDropdown.classList.toggle('active');
            });
            document.addEventListener('click', (e) => {
                if (!lecturesDropdown.contains(e.target)) {
                    lecturesDropdown.classList.remove('active');
                }
            });
        }

        const footerLecturesDropdown = document.getElementById('footerLecturesDropdown');
        if(footerLecturesDropdown) {
            const footerDropdownToggle = footerLecturesDropdown.querySelector('.footer-dropdown-toggle');
            footerDropdownToggle.addEventListener('click', (e) => {
                e.preventDefault();
                footerLecturesDropdown.classList.toggle('active');
            });
        }

        const scrollToTopBtn = document.getElementById('scrollToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Accordion Toggle Function
        function toggleAccordion(element) {
            const accordionItem = element.parentElement;
            accordionItem.classList.toggle('active');
        }

        // Data Structure Selector Function
        function selectDataStructure(dsType) {
            // Hide all data structure contents
            const allContents = document.querySelectorAll('.ds-content');
            allContents.forEach(content => content.classList.remove('active'));
            
            // Remove active class from all buttons
            const allButtons = document.querySelectorAll('.ds-button');
            allButtons.forEach(btn => btn.classList.remove('active'));
            
            // Show selected data structure
            const selectedContent = document.getElementById('ds-' + dsType);
            if (selectedContent) {
                selectedContent.classList.add('active');
            }
            
            // Activate corresponding button
            event.currentTarget.classList.add('active');
        }

        // Utility Selector Function (Arrays/Collections)
        function selectUtility(utilType) {
            // Hide all utility contents
            const allContents = document.querySelectorAll('.util-content');
            allContents.forEach(content => content.classList.remove('active'));
            
            // Remove active class from all utility buttons in this section
            const parentSection = event.currentTarget.closest('.accordion-content');
            const allButtons = parentSection.querySelectorAll('.ds-button');
            allButtons.forEach(btn => btn.classList.remove('active'));
            
            // Show selected utility
            const selectedContent = document.getElementById('util-' + utilType);
            if (selectedContent) {
                selectedContent.classList.add('active');
            }
            
            // Activate corresponding button
            event.currentTarget.classList.add('active');
        }

        // Implementation Type Switcher (Array vs Node)
        function switchImplementation(dsType, implType) {
            // Hide all tab contents for this data structure
            const arrayTab = document.getElementById(dsType + '-array');
            const nodeTab = document.getElementById(dsType + '-node');
            
            if (arrayTab) arrayTab.classList.remove('active');
            if (nodeTab) nodeTab.classList.remove('active');
            
            // Remove active class from all tab buttons in this section
            const tabButtons = event.currentTarget.parentElement.querySelectorAll('.tab-button');
            tabButtons.forEach(btn => btn.classList.remove('active'));
            
            // Show selected implementation
            const selectedTab = document.getElementById(dsType + '-' + implType);
            if (selectedTab) {
                selectedTab.classList.add('active');
            }
            
            // Activate corresponding tab button
            event.currentTarget.classList.add('active');
        }

        function openDSTab(evt, tabName) {
            // Get all elements with class="ds-content" and hide them
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("ds-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }

            // Get all elements with class="ds-tab-btn" and remove the class "active"
            tablinks = document.getElementsByClassName("ds-tab-btn");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

    </script>
    <script src="mobile-nav.js"></script>
</body>
</html>