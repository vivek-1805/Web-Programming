# Web Programming Labs 4–12

A small, dependency-free set of practical exercises using HTML, CSS, JavaScript, XML and PHP. Open `index.html` through a web server to use the project. Labs 10–12 require PHP.

## Run with PHP's built-in server

1. Install PHP 8 or later and make sure `php` is available in your terminal.
2. Open a terminal in this project folder (`labs-4-to-12`).
3. Run `php -S localhost:8000`.
4. Open [http://localhost:8000](http://localhost:8000) in your browser.
5. Stop the server with Ctrl+C in the terminal when finished.

The server must remain running while you use the site. Lab 9 fetches `countries.xml` with JavaScript, so opening the HTML file directly from disk may prevent that exercise from loading.

## Run with XAMPP

1. Install and start Apache in XAMPP.
2. Copy the complete `labs-4-to-12` folder into XAMPP's `htdocs` directory (commonly `C:\xampp\htdocs\`).
3. Open [http://localhost/labs-4-to-12/](http://localhost/labs-4-to-12/) in a browser.

## Labs included

- **Lab 4:** five-country selector that displays each capital with custom font styling.
- **Lab 5:** Jain University college profile, Kanakapura address, course styles, background photo and scrolling notice.
- **Lab 6:** Devarapalli travel destination page using a separate stylesheet (`assets/travel.css`).
- **Lab 7:** four-operation calculator with division-by-zero handling.
- **Lab 8:** user information form and a separate results page populated by JavaScript session storage (so personal details are not put in the page address).
- **Lab 9:** reads `countries.xml` and displays its records in a table.
- **Lab 10:** PHP session with name, start time, logout and session duration.
- **Lab 11:** PHP server date, time and weekday.
- **Lab 12:** PHP name and age form with an under-18 authorization response.

## Notes

The college and destination text is sample educational content. Background photos use remote Unsplash image URLs and require an internet connection; the exercises themselves do not depend on the photos. Lab 11 uses the PHP server's configured time zone. Set PHP's `date.timezone` in `php.ini` if you want a particular local time zone.
