Usage
-------------

Configure urls to parse in config.py. Then, run:

    scrapy runspider broken_links_spider.py -o output.json

Then check 404, 301 and 302 items in the output.json file. 

To download all PDFs from a website, run:

    scrapy runspider pdf_scraper.py
