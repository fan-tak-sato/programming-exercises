import { NgWebsitePage } from './app.po';

describe('ng-website App', () => {
  let page: NgWebsitePage;

  beforeEach(() => {
    page = new NgWebsitePage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
