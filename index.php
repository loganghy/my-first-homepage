<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condatis - Building Trusted Digital Relationships</title>
    <link rel="stylesheet" href="<?php echo function_exists('get_stylesheet_uri') ? get_stylesheet_uri() : 'style.css'; ?>">
</head>
<body>
    
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href="#" class="logo">
                    <img src="<?php echo function_exists('get_template_directory_uri') ? get_template_directory_uri() . '/images/condatis-logo.png' : 'images/condatis-logo.png'; ?>" alt="Condatis Logo">
                </a>
                
                <button class="mobile-menu-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <nav class="navigation" id="header-nav" aria-label="Main navigation">
                    <ul class="nav-menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="https://condatis.com/iam-services/">Digital Identity Services</a>
                            <ul class="sub-menu">
                                <li><a href="https://condatis.com/iam-services/identity-workshops/">Microsoft Entra Workshops</a></li>
                                <li><a href="https://condatis.com/iam-services/entra-pocs/">Microsoft Entra PoC's</a></li>
                                <li><a href="https://condatis.com/iam-services/identity-migration-optimisation/">Identity Migration &amp; Optimisation Services</a></li>
                                <li><a href="https://condatis.com/iam-services/entra-solution-support/">Entra Solution Support</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Technology</a>
                            <ul class="sub-menu">
                                <li><a href="https://condatis.com/technology/microsoft-azure-ad-b2c/">Microsoft Azure AD B2C</a></li>
                                <li class="menu-item-has-children">
                                    <a href="https://condatis.com/technology/microsoft-entra-suite/">Microsoft Entra Suite</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://condatis.com/technology/microsoft-entra-suite/entra-id/">Microsoft Entra ID</a></li>
                                        <li><a href="https://condatis.com/technology/microsoft-entra-suite/entra-verified-id/">Microsoft Entra Verified ID</a></li>
                                        <li><a href="https://condatis.com/technology/microsoft-entra-suite/entra-id-governance/">Microsoft Entra ID Governance</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://condatis.com/technology/microsoft-entra-suite/entra-external-id/">Microsoft Entra External ID</a></li>
                                <li><a href="https://condatis.com/technology/decentralized-identity/">Decentralized Identity</a></li>
                                <li><a href="https://condatis.com/cenda/">Cenda</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="https://condatis.com/sectors/">Sectors</a>
                            <ul class="sub-menu">
                                <li><a href="https://condatis.com/sectors/hospitality-travel-and-tourism/">Hospitality, Travel, and Tourism</a></li>
                                <li><a href="https://condatis.com/sectors/higher-education/">Higher Education</a></li>
                                <li><a href="https://condatis.com/sectors/entra-financial-services/">Financial Services</a></li>
                                <li><a href="https://condatis.com/sectors/retail/">Retail</a></li>
                                <li><a href="https://condatis.com/sectors/entra-manufacturing/">Manufacturing</a></li>
                                <li><a href="https://condatis.com/sectors/government/">Government</a></li>
                                <li><a href="https://condatis.com/sectors/utilities/">Utilities</a></li>
                                <li><a href="https://condatis.com/sectors/enterprise/">Enterprise</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="https://condatis.com/resources/">Resources</a>
                            <ul class="sub-menu">
                                <li><a href="https://condatis.com/category/news/">News</a></li>
                                <li><a href="https://condatis.com/category/case-studies/">Case Studies</a></li>
                                <li><a href="https://condatis.com/category/webinars/">Webinars</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="https://condatis.com/about-us/">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="https://condatis.com/people/">Team</a></li>
                                <li><a href="https://condatis.com/careers/">Careers</a></li>
                                <li><a href="https://condatis.com/about-us/partners/">Partners</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="https://condatis.com/contact-us/">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <p class="hero-tagline">Protecting organisations, connecting people.</p>
            <h1>Building Trusted Digital Relationships</h1>
            <p>We deliver employee, customer, and partner identity and access management solutions to drive growth, reduce friction and improve security.</p>
            <a href="#solutions" class="btn">Find out more</a>
        </div>
    </section>

    <!-- Gartner Research Section -->
    <section class="section">
        <div class="container">
            <div class="card">
                <p class="card-label">Complimentary research</p>
                <h2>Peer Lessons Learned for Identity Governance and Administration Solution Implementation</h2>
                <p>Discover the latest insights in Identity Governance with complimentary access to this Gartner® IGA report</p>
                <a href="#" class="btn">See the report</a>
            </div>
        </div>
    </section>

    <!-- Product Announcement - Cenda -->
    <section class="section section-gray">
        <div class="container">
            <div class="card">
                <p class="card-label">PRODUCT</p>
                <h2>Welcome Cenda</h2>
                <p>Back in 2022, we launched our decentralized identity orchestration solution, Condatis Credential Gateway. A solution, providing verifiable credential capabilities in a common standards-based way. But it's 2025, and we've made some advancements, so we decided to get a fresh new look that encompasses our product vision.</p>
                <a href="#" class="btn">See what's new</a>
            </div>
        </div>
    </section>

    <!-- Microsoft Entra Section -->
    <section class="section">
        <div class="container">
            <h2 class="text-center">Empowering digital growth with Microsoft Entra</h2>
            <div class="microsoft-section">
                <div>
                    <div style="background-color: #f5f5f5; padding: 20px; border-radius: 8px; text-align: center;">
                        <p style="margin: 0; font-weight: 600; color: #0078D4;">Microsoft Solutions Partner</p>
                    </div>
                </div>
                <div>
                    <p>At Condatis, we specialise in understanding businesses and their challenges and using tailor-made Identity and Access Management solutions, harnessing the power of Microsoft Entra.</p>
                    <p>Our focus is to simplify onboarding, enhance security, and boost business efficiency for clients globally.</p>
                    <p>Grow and adapt with confidence and assurance that customer, partner, staff and citizen data is safe and accessible by the right people at the right time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="section section-gray">
        <div class="container">
            <h2 class="text-center">Our Mission</h2>
            <div class="section-header">
                <p>We are driven by a mission to empower organisations to thrive in the digital economy by leveraging trusted digital identities. We firmly believe that granting users control and transparency over their data storage, sharing, and management fosters an environment where trust between individuals and organisations becomes a reality.</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Condatis Section -->
    <section class="section">
        <div class="container">
            <h2 class="text-center">Why choose Condatis?</h2>
            <ul class="features-list" style="max-width: 900px; margin: 40px auto;">
                <li><strong>Bespoke Solutions:</strong> Our solutions are custom-built to meet each client's unique needs, ensuring optimal performance and alignment with business objectives.</li>
                <li><strong>Global Reach:</strong> With clients worldwide, we have a proven track record of delivering successful IAM solutions across diverse industries and geographies.</li>
                <li><strong>Focus on Trust:</strong> Trust is at the core of everything we do. We prioritise transparency, security, and user control to foster trust between organisations and stakeholders.</li>
                <li><strong>Expertise and Experience:</strong> Backed by a team of experienced professionals, we bring expertise in IAM, Microsoft Entra, and IT infrastructure management to every project.</li>
            </ul>
            <p class="text-center">We state our competency with confidence. We have successfully delivered IAM capabilities to high-profile clients with complex requirements and will always give you a reference so you can back our claims up.</p>
            <div class="text-center" style="margin-top: 30px;">
                <a href="#" class="btn">Our latest case studies</a>
            </div>
        </div>
    </section>

    <!-- Microsoft Solutions Partner Section -->
    <section class="section section-gray">
        <div class="container">
            <h2 class="text-center">Microsoft Solutions Partner</h2>
            <div class="section-header">
                <p>As a trusted Microsoft Solutions Partner, we enhance Microsoft Entra technology to offer practical solutions where IT infrastructure is complex. Our team comprises over 40 seasoned experts who excel in streamlining systems to enhance user experience while mitigating friction, risks, and costs.</p>
                <p>Find out how you can leverage the power of the Microsoft Entra Identity and Access Management product suite.</p>
                <div class="text-center" style="margin-top: 30px;">
                    <a href="#" class="btn">Microsoft Entra</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sectors Section -->
    <section class="section" id="sectors">
        <div class="container">
            <h2 class="text-center">Sector</h2>
            <div class="sector-grid">
                <div class="sector-card">
                    <div class="sector-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40 10L20 25V55L40 70L60 55V25L40 10Z" stroke="#FF6B35" stroke-width="3" fill="none"/>
                            <path d="M30 35L40 40L50 35" stroke="#FF6B35" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Hospitality, Travel, and Tourism</h3>
                    <p>Creating seamless experiences in Hospitality, Travel, and Tourism to elevate guest experiences and optimise operational...</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
                
                <div class="sector-card">
                    <div class="sector-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="25" r="10" stroke="#FF6B35" stroke-width="3" fill="none"/>
                            <path d="M25 50C25 42 31 35 40 35C49 35 55 42 55 50V55H25V50Z" stroke="#FF6B35" stroke-width="3" fill="none"/>
                            <path d="M35 60H45M40 55V60" stroke="#FF6B35" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Higher Education</h3>
                    <p>Enhancing student experience, helping Universities to improve onboarding and management of applicants, staff and alumni by creating smooth user...</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
                
                <div class="sector-card">
                    <div class="sector-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="20" y="25" width="40" height="30" rx="3" stroke="#FF6B35" stroke-width="3" fill="none"/>
                            <path d="M30 25V20C30 17 32 15 35 15H45C48 15 50 17 50 20V25" stroke="#FF6B35" stroke-width="3"/>
                            <circle cx="40" cy="40" r="5" fill="#FF6B35"/>
                        </svg>
                    </div>
                    <h3>Financial Services</h3>
                    <p>Elevate Financial Services with Entra. We are a trusted Microsoft Entra Partner. We specialise in advanced digital Identity and Access Management (IAM) solutions....</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
                
                <div class="sector-card">
                    <div class="sector-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 55H60V60H20V55Z" stroke="#FF6B35" stroke-width="3" fill="none"/>
                            <path d="M30 35L35 55M45 35L50 55" stroke="#FF6B35" stroke-width="3"/>
                            <rect x="25" y="20" width="30" height="15" stroke="#FF6B35" stroke-width="3" fill="none"/>
                        </svg>
                    </div>
                    <h3>Retail</h3>
                    <p>Retail is shifting from sales to personalised experiences, driven by digital transformation. CIAM ensures seamless, secure interactions across all touchpoints. As a...</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
                
                <div class="sector-card">
                    <div class="sector-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="20" y="20" width="40" height="40" stroke="#FF6B35" stroke-width="3" fill="none"/>
                            <path d="M30 30H50M30 40H50M30 50H50" stroke="#FF6B35" stroke-width="2"/>
                            <circle cx="25" cy="30" r="2" fill="#FF6B35"/>
                            <circle cx="25" cy="40" r="2" fill="#FF6B35"/>
                            <circle cx="25" cy="50" r="2" fill="#FF6B35"/>
                        </svg>
                    </div>
                    <h3>Manufacturing</h3>
                    <p>Empower Manufacturing Transformation with Entra. Manufacturing industries—from BioPharma to Automotive, Mobility, and beyond—are navigating a rapidly changing...</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
                
                <div class="sector-card">
                    <div class="sector-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 55H55V25L40 15L25 25V55Z" stroke="#FF6B35" stroke-width="3" fill="none"/>
                            <rect x="35" y="40" width="10" height="15" stroke="#FF6B35" stroke-width="2" fill="none"/>
                            <rect x="30" y="30" width="6" height="6" stroke="#FF6B35" stroke-width="2" fill="none"/>
                            <rect x="44" y="30" width="6" height="6" stroke="#FF6B35" stroke-width="2" fill="none"/>
                        </svg>
                    </div>
                    <h3>Government and Civil Service</h3>
                    <p>Providing citizens joined up digital services from central and local government with a security cleared team....</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="section section-gray" id="solutions">
        <div class="container">
            <h2 class="text-center">Solutions</h2>
            <div class="solutions-grid">
                <div class="solution-card">
                    <span class="solution-number">01</span>
                    <h3>CIAM</h3>
                    <p>Enabling customers to validate their identity once and gain access to multiple services</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
                
                <div class="solution-card">
                    <span class="solution-number">02</span>
                    <h3>Citizen Identity</h3>
                    <p>Looking to the future replacements for Verify</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
                
                <div class="solution-card">
                    <span class="solution-number">03</span>
                    <h3>Partner Identity</h3>
                    <p>Enhancing the productivity of partners, while protecting organisations from security threats</p>
                    <a href="#" class="btn-secondary">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="section">
        <div class="container">
            <h2 class="text-center">Our latest news</h2>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-content">
                        <p class="news-meta">Blog • 21 August 2025</p>
                        <h3>How Identity Tackles Customer Experience</h3>
                        <p>Discover how modern identity solutions like Microsoft Entra transform customer journeys by reducing friction, building trust, and driving engagement.</p>
                        <a href="#" class="btn-secondary">Continue reading</a>
                    </div>
                </div>
                
                <div class="news-card">
                    <div class="news-content">
                        <p class="news-meta">Blog • 28 July 2025</p>
                        <h3>How Identity Tackles Onboarding & Agency Worker Experiences</h3>
                        <p>Many organisations struggle to efficiently onboard contractors and agency workers. Discover how Microsoft Entra streamlines external workforce onboarding and boosts compliance.</p>
                        <a href="#" class="btn-secondary">Continue reading</a>
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 40px;">
                <a href="#" class="btn">View all articles</a>
            </div>
        </div>
    </section>

    <!-- Footer CTA Section -->
    <footer class="footer-cta" role="region" style="background-image: url('<?php echo function_exists('get_template_directory_uri') ? get_template_directory_uri() . '/footer-bg.jpg' : 'footer-bg.jpg'; ?>')">
        <div class="container">
            <div class="footer-cta-content">
                <div class="footer-cta-text">
                    <h3 class="footer-cta-title">Protecting organisations, connecting people.</h3>
                    <p class="footer-cta-subtitle">Condatis is your partner in Identity and Access Management</p>
                </div>
                <div class="footer-cta-action">
                    <a href="https://condatis.com/contact-us/" class="btn btn-white">Contact our team</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const navigation = document.querySelector('.navigation');
            
            if (menuToggle && navigation) {
                menuToggle.addEventListener('click', function() {
                    navigation.classList.toggle('active');
                });
            }
        });
    </script>
</body>
</html>
