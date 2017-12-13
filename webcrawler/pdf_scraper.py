import scrapy
import urlparse
import config

from scrapy.http import Request
from scrapy.selector import HtmlXPathSelector
from scrapy.spiders import CrawlSpider, Rule
from scrapy.linkextractors import LinkExtractor
from scrapy.item import Item, Field

class PdfDownloader(CrawlSpider):
    name = config.name
    allowed_domains = config.allowed_domains
    start_urls = config.start_urls
    rules = (Rule(LinkExtractor(), callback='parse_item', follow=True),)
    
    def parse_item(self, response):
        selector = 'a[href$=".pdf"]::attr(href)'
        for href in response.css(selector).extract():
            yield Request(
                url=response.urljoin(href),
                callback=self.save_pdf
            )

    def save_pdf(self,response):
        path = response.url.split('/')[-1]
        self.logger.info('Saving PDF %s', path);
        with open(path, 'wb') as file:
            file.write(response.body);
