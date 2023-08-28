const puppeteer = require('puppeteer');

async function getKeywordPosition(keyword, url) {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();

    // Navigate to the Google search results page
    await page.goto(`https://www.google.com/search?q=${encodeURIComponent(keyword)}`);

    // Extract the position of the URL in the search results
    const position = await page.evaluate((url) => {
        const results = document.querySelectorAll('.g');
        for (let i = 0; i < results.length; i++) {
            const link = results[i].querySelector('a');
            if (link && link.href.includes(url)) {
                return i + 1; // Position starts from 1
            }
        }
        return 0; // 0 indicates not found
    }, url);

    await browser.close();

    return position;
}

// Example usage
const keyword = 'your keyword';
const url = 'https://www.example.com';
getKeywordPosition(keyword, url)
    .then((position) => {
        console.log(`Position of "${keyword}" for ${url}: ${position}`);
    })
    .catch((error) => {
        console.error('An error occurred:', error);
    });