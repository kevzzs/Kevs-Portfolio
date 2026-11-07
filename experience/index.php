<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Experiences</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <header id="header">
        <nav>
            <div class="header-title">
                <p><a href="../index.php">Kevin Chan Pacifico</a></p>
            </div>
            <div class="header-btn">
                <ul>
                    <li><a href="../about/index.php">About</a></li>
                    <li><a href="../projects/index.php">Portfolio</a></li>
                    <li><a href="../experience/index.php">Experience</a></li>
                </ul>
            </div>
            <div class="header-contact">
                <ul>
                    <li><a href="https://www.facebook.com/kevin.monteroyo.94/" target="_blank" rel="noopener noreferrer"><img src="../img/fb.png" alt="Facebook"></a></li>
                    <li><a href="https://github.com/kevzzs" target="_blank" rel="noopener noreferrer"><img src="../img/github.png" alt="GitHub"></a></li>
                    <li><a href="https://www.linkedin.com/in/kevin-chan-pacifico-aa1722360/" target="_blank" rel="noopener noreferrer"><img src="../img/linkedin.png" alt="LinkedIn"></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="timeline-container">
        <div class="timeline" id="timeline">
            <!-- Timeline items will be dynamically added here -->
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2026 Kevin Chan Pacifico. All rights reserved.</p>
            <div class="footer-links">
                <a href="mailto:kevinmonterroyo10@gmail.com">Email</a>
                <a href="https://github.com/kevzzs" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a href="https://www.linkedin.com/in/kevin-chan-pacifico-aa1722360/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            </div>
        </div>
    </footer>

    <script>
        // Career data
        const careerData = [
            // RESEARCH & COURSEWORK
            // {
            //     title: 'Undergraduate Researcher',
            //     company: 'University of Wisconsin-Parkside, Cognitive Neuroscience Lab',
            //     period: 'June 2024 - Present',
            //     description: [
            //         'Prepared IRB approvals and submissions for experimental procedures and conferences.'
            //     ],
            //     icon: '',
            //     details: 'Developed experimental protocols, conducted EEG analysis, and participated in all aspects of human subjects research while ensuring ethical compliance and professional standards.'
            // },
            // {
            //     title: 'Independent Research Study (PSYC 499)',
            //     company: 'University of Wisconsin-Parkside, Cognitive Neuroscience Lab',
            //     period: 'September 2024 - Present',
            //     description: [
            //         'Conducted multimodal data collection with high-density EEG, eye-tracking, and physiological measures.',
            //         'Designed experiments manipulating AI chatbot profiles to analyze information accuracy and cognitive load.',
            //         'Assessed cognitive load markers like theta activity, pupillary dilation, and visual saccades.',
            //         'Employed machine-learning techniques and neural mapping for pattern recognition.'
            //     ],
            //     icon: '',
            //     details: 'Focused on cognitive load dynamics, neural markers for information validation, and actionable insights for AI interface improvements.'
            // },
            // {
            //     title: 'Psychological Research Seminar (PSYC 492)',
            //     company: 'University of Wisconsin-Parkside',
            //     period: 'September 2024 - January 2025',
            //     description: [
            //         'Developed surveys combining quantitative scales and qualitative open-ended questions for media literacy studies.',
            //         'Utilized TF-IDF techniques and k-means clustering for pattern recognition in qualitative responses.',
            //         'Measured political psychology concepts like political efficacy and media perceptions.',
            //         'Examined third-person effects, propaganda interpretation, and credibility evaluations.'
            //     ],
            //     icon: '',
            //     details: 'Connected political psychology with media studies to address contemporary misinformation issues, combining quantitative and qualitative methodologies.'
            // },
            // {
            //     title: 'In-Progress Research Publications',
            //     company: 'University of Wisconsin-Parkside',
            //     period: '2025 (Expected)',
            //     description: [
            //         'Burleson, J., & Gregg, M. "Neural and Physiological Correlates of Information Verification in Human-AI Interactions." Target journal: Frontiers in Computational Neuroscience',
            //         'Submitted to Midwestern Psychological Association (MPA) & Madison\'s Research in the Rotunda',
            //         'Focus on multimodal analysis of cognitive and physiological responses to cognitive workload'
            //     ],
            //     icon: '',
            //     details: 'Anticipating outcomes that enhance human-AI interaction design and usability, contributing significantly to cognitive neuroscience.'
            // },
            // {
            //     title: 'Inbound & Outbound Distribution Coordinator',
            //     company: 'Meijer Logistics & Distribution Center',
            //     period: 'July 2020 - Present',
            //     description: [
            //         'Managed multi-million dollar inventory, ensuring <1% margin of error across loading and distribution.',
            //         'Coordinated workflows in inventory management, order fulfillment, and transportation.',
            //         'Developed resilience, time management, and independent thinking by balancing full-time work with academic commitments.'
            //     ],
            //     icon: '',
            //     details: `
            //         Applicable Skills:
            //         - Logistics Management, Supply Chain Management, Workplace Safety.
            //         - Project Management, Resource Allocation, and Leadership.
            //         - Critical Thinking, Forklift Training, Analytical Skills, and Cloud Applications.`
            // },
            // {
            //     title: 'Shift Team Lead',
            //     company: 'Dunkin Donuts Inc.',
            //     period: 'January 2018 - April 2020',
            //     description: [
            //         'Independently managed store operations, overseeing daily revenue up to $100,000.',
            //         'Reduced waste by 7% through optimized inventory and scheduling.',
            //         'Performed audits, managed shifts, and handled shipping/receiving processes.'
            //     ],
            //     icon: '',
            //     details: `
            //         Applicable Skills:
            //         - Resource Allocation, Employee Training, Strategic Planning.
            //         - Cash Management, Critical Thinking, and Time Management.`
            // },
            // {
            //     title: 'Professional Assistant',
            //     company: 'Tremper High School | Internship',
            //     period: 'September 2019 - March 2020',
            //     description: [
            //         'Managed project timelines and deliverables for senior elective classes in the Drama Department.',
            //         'Organized files, graded assignments, and ensured confidentiality.',
            //         'Responded to emails efficiently, supporting teaching aid roles.'
            //     ],
            //     icon: '',
            //     details: `
            //         Applicable Skills:
            //         - Project Management, Ethical Decision-Making, Time Efficiency.
            //         - Attention to Detail, Computer Literacy, and Organizational Skills.`
            // },
            // {
            //     title: 'Customer Service Specialist',
            //     company: 'Target | Part-time',
            //     period: 'April 2019 - March 2020',
            //     description: [
            //         'Provided exceptional customer service by resolving inquiries and ensuring satisfaction.',
            //         'Managed high-volume calls and emails, meeting response and resolution performance metrics.',
            //         'Demonstrated strong product knowledge and built rapport with customers.'
            //     ],
            //     icon: '',
            //     details: `
            //         Applicable Skills:
            //         - Critical Thinking, Customer Service, Microsoft Office.
            //         - Analytical Skills, Communication, and Time Efficiency.`
            // },
            // {
            //     title: 'Farm Assistant',
            //     company: 'JERRY SMITH | Seasonal',
            //     period: 'September 2018 - November 2019',
            //     description: [
            //         'Assisted with product marketing, inventory management, and cash handling.',
            //         'Fostered inclusive team collaboration to meet seasonal targets.',
            //         'Maintained workplace safety and operational efficiency.'
            //     ],
            //     icon: '',
            //     details: `
            //         Applicable Skills:
            //         - Retail Sales, Collaborative Problem Solving, Inventory Control.
            //         - Time Management, Attention to Detail, and Workplace Safety.`
            // },
            // {
            //     title: 'Retail Salesworker',
            //     company: 'Tommy Hilfiger | Part-time',
            //     period: 'October 2018 - March 2019',
            //     description: [
            //         'Handled accurate cash transactions and managed customer purchases efficiently.',
            //         'Conducted inventory verification and implemented asset protection measures.',
            //         'Created a welcoming shopping environment to drive sales and customer satisfaction.'
            //     ],
            //     icon: '',
            //     details: `
            //         Applicable Skills:
            //         - Product Marketing, Cash Handling, Business Analytics.
            //         - Communication, Inventory Control, and Sales Optimization.`
            // },
            // {
            //     title: 'Shift Team Lead',
            //     company: 'The Wendy\'s Company',
            //     period: 'November 2016 - May 2020',
            //     description: [
            //         'Trained new hires on cooking techniques and ensured consistent quality standards.',
            //         'Managed inventory levels, food costs, and sanitation audits.',
            //         'Oversaw kitchen organization and compliance with health and safety regulations.'
            //     ],
            //     icon: '',
            //     details: `
            //         Applicable Skills:
            //         - Leadership, Team Management, Inventory Control.
            //         - Workplace Safety, Microsoft Office, and Problem Solving.`
            // },
            {
                title: 'Freelancing',
                company: 'Side Hustle as an IT student',
                period: '2024 - Present',
                description: [
                    'Designed and developed simple websites and landing pages using HTML, CSS, and JavaScript.',
                    'Customized layouts, styles, and content based on client or personal project requirements.'
                ],
                icon: '',
                details: `
                    - Applied frontend development skills using HTML, CSS, and JavaScript while focusing on responsive design, basic UI/UX principles, effective problem-solving, clear client communication, and proper time management.    
                `
            },
            {
                title: 'Bachelor of Science in Information Technology',
                company: 'Pamantasan ng Lungsod ng Valenzuela',
                period: '2023',
                description: [
                    'Hands-on experience through academic projects and practical coursework.',
                    'Actively improving frontend development skills alongside academic studies.'
                ],
                icon: '',
                details: `
                    - Built multiple frontend projects including responsive websites and JavaScript DOM applications.
                `
            },
            {
                title: 'Hello, World!',
                company: 'Netbeans',
                period: '2019',
                description: [
                    'Wrote my first line of code.'
                ],
                icon: '',
                details: 'Marked the beginning of my journey in programming, learning basic syntax, logic, and problem-solving.'
            }
        ];

        // Timeline functionality
        class Timeline {
            constructor(data) {
                this.data = data;
                this.init();
            }

            init() {
                this.renderTimeline();
                this.setupIntersectionObserver();
            }

            renderTimeline() {
                const timelineContainer = document.getElementById('timeline');
                timelineContainer.innerHTML = '';

                this.data.forEach(item => {
                    const timelineItem = this.createTimelineItem(item);
                    timelineContainer.appendChild(timelineItem);
                });
            }

            createTimelineItem(item) {
                const div = document.createElement('div');
                div.className = 'timeline-item';
                div.dataset.type = item.type;

                div.innerHTML = `
                    <div class="timeline-icon">${item.icon}</div>
                    <div class="timeline-content">
                        <div class="timeline-date">${item.period}</div>
                        <div class="timeline-title">${item.title}</div>
                        <div class="timeline-company">${item.company}</div>
                        <div class="timeline-description">
                            <ul>
                                ${item.description.map(desc => `<li>${desc}</li>`).join('')}
                            </ul>
                        </div>
                        <div class="timeline-details">${item.details}</div>
                    </div>
                `;

                return div;
            }

            setupIntersectionObserver() {
                const options = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.1
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        }
                    });
                }, options);

                document.querySelectorAll('.timeline-item').forEach(item => {
                    observer.observe(item);
                });
            }
        }

        // Initialize timeline when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new Timeline(careerData);
        });
    </script>

</body>

</html>
