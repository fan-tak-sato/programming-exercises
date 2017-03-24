import { Component } from '@angular/core';

import { Ng2BreadcrumbModule, BreadcrumbService } from 'ng2-breadcrumb/ng2-breadcrumb';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Ng Website';

  constructor(private breadcrumbService: BreadcrumbService) {
    breadcrumbService.hideRoute('/');
    breadcrumbService.hideRoute('/home');

    breadcrumbService.addFriendlyNameForRoute('/about', 'About us');
    breadcrumbService.addFriendlyNameForRoute('/contacts', 'Contact us');
  }
}
