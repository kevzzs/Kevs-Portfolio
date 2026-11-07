KEVIN CHAN PACIFICO - PORTFOLIO WEBSITE
========================================

Portfolio Description
---------------------
This is a multi-page PHP portfolio website for Kevin Chan Pacifico, a frontend developer and Information Technology student. It presents professional background, featured web projects, experience, certificates, contact links, and a downloadable curriculum vitae.

The site uses a clean, light visual style with a purple accent color. It is designed for desktop, tablet, and mobile viewing and can be deployed to any PHP-compatible shared hosting provider, including InfinityFree.


Highlights
----------
- Multi-page PHP structure instead of a single-page portfolio.
- Dedicated Home, About, Projects, and Experience pages.
- Responsive layouts for desktop, tablet, and mobile devices.
- Downloadable CV in PDF format.
- Direct Facebook, GitHub, LinkedIn, and email links.
- Animated project carousel on the landing page.
- Animated certificate carousel on the About page.
- Six locally hosted certificate PDFs with preview images.
- Interactive experience timeline.
- Consistent navigation, footer, color palette, and typography across pages.


Features
--------
1. Home page
   - Professional introduction and profile image.
   - Download CV call-to-action.
   - Direct navigation to the About page.
   - Automatically scrolling project-preview carousel.

2. About page
   - Personal introduction and frontend-development focus.
   - Summary cards for projects, certificates, and experience.
   - Automatically scrolling certificate carousel.
   - Certificate previews that open the original PDF certificate in a new browser tab.

3. Projects page
   - Project cards with screenshots, descriptions, and technology labels.
   - Responsive card layout for tablets and mobile devices.

4. Experience page
   - Animated education and work-experience timeline.
   - Clear dates, descriptions, and skills gained.

5. Shared site features
   - Navigation links between all pages.
   - Social media and email links.
   - Consistent footer with quick contact links.
   - Responsive CSS breakpoints.


Software and Requirements
-------------------------
To run the website locally, install the following:

- XAMPP for Windows, macOS, or Linux.
  Download: https://www.apachefriends.org/
- A modern web browser, such as Google Chrome, Microsoft Edge, Firefox, or Safari.
- A code editor, such as Visual Studio Code (recommended).

Runtime requirements:

- Apache web server.
- PHP 7.4 or later. PHP 8.x is recommended.
- JavaScript enabled in the browser for the Experience timeline animation.

No database, Composer packages, Node.js packages, or environment variables are required.


How to Run Locally with XAMPP
-----------------------------
1. Install XAMPP if it is not already installed.

2. Copy or move this entire project folder to the XAMPP htdocs directory:

   C:\xampp\htdocs\Portfolio

3. Open the XAMPP Control Panel.

4. Start the Apache service.

5. Open a browser and visit:

   http://localhost/Portfolio/

6. The Apache server automatically loads index.php from the project root.

If the website does not load:

- Confirm that Apache is running in XAMPP.
- Confirm that index.php is directly inside the Portfolio folder.
- Confirm that the browser URL is http://localhost/Portfolio/.
- Check that no other program is blocking Apache ports 80 or 443.


How to Deploy to InfinityFree or Another PHP Host
--------------------------------------------------
1. Create a hosting account and add or select your domain/subdomain.

2. Open the provider's File Manager or connect using FTP.

3. Open the public web directory. On InfinityFree, this is usually:

   htdocs/

4. Upload the CONTENTS of this project folder into htdocs/.
   Do not upload the outer Portfolio folder itself unless you intentionally want the site URL to include /Portfolio/.

5. Confirm that index.php is directly inside htdocs/ after uploading.

6. Keep the following folders together with index.php because the site depends on their relative paths:

   about/
   projects/
   experience/
   img/
   certificates/

7. Visit your domain after the upload is complete.

Important deployment notes:

- This is a PHP website. Deploy it to a PHP-capable host such as InfinityFree, not GitHub Pages.
- GitHub Pages does not execute PHP files.
- Upload files in binary/automatic transfer mode so PDFs and images remain intact.
- Test every navigation link, CV download, certificate PDF, image, and social link after deployment.


Project Structure and Folder Guide
----------------------------------
Portfolio/
|
|-- index.php
|   Home page and primary entry point for the website.
|
|-- style.css
|   Styles for the home page, project carousel, footer, and responsive home layout.
|
|-- script.js
|   Reserved for future shared JavaScript functionality.
|
|-- Blue and White Clean and Professional Resume.pdf
|   Downloadable CV linked from the Home and About pages.
|
|-- ReadMe.txt
|   Project documentation and setup instructions.
|
|-- about/
|   |-- index.php
|   |   About page, profile summary cards, and certificates section.
|   |
|   `-- style.css
|       About page, certificate carousel, and responsive styles.
|
|-- projects/
|   |-- index.php
|   |   Portfolio/project listing page.
|   |
|   `-- style.css
|       Project-card layout and responsive styles.
|
|-- experience/
|   |-- index.php
|   |   Work and education timeline page.
|   |
|   `-- style.css
|       Timeline, footer, and responsive styles.
|
|-- certificates/
|   Locally hosted PDF certificates opened from the About-page carousel.
|
|-- img/
|   Project screenshots, profile photos, icons, and visual assets.
|   |
|   `-- certificates/
|       PNG previews used by the certificate carousel.
|
`-- tmp/
    Temporary local working files. This folder is not required for production deployment.


Used Development Tools and Technologies
----------------------------------------
Languages and web technologies:

- PHP
- HTML5
- CSS3
- JavaScript (ES6)

Development tools and software:

- Visual Studio Code or another code editor
- XAMPP and Apache for local PHP development
- Google Chrome / Microsoft Edge developer tools for testing
- Cisco Packet Tracer (related to certificate coursework)
- Git and GitHub for source-control and project hosting

Design and content assets:

- Google Fonts: Poppins
- PDF certificates and resume documents
- Locally stored PNG/JPG project screenshots and social icons


Quality Assurance Checklist
---------------------------
Before publishing an update, verify the following:

- Home page opens through index.php.
- All navigation links open the correct PHP page.
- Social-media links open the correct profiles.
- Download CV links download or open the resume PDF.
- All certificate cards open the matching certificate PDF.
- Project and certificate carousels still animate.
- Layout is usable at desktop, tablet, and mobile widths.
- No image is broken and no page produces a PHP error.
- Footer content is consistent on every page.


Maintenance Notes
-----------------
- Add live-demo and GitHub repository links for each project when they are available.
- Update the certificate count and carousel when new certificates are added.
- Keep filenames and relative paths unchanged unless the corresponding page links are updated.
- Remove the tmp/ folder before uploading if it only contains local temporary files.
