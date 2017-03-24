import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';

import {Ng2BreadcrumbModule} from 'ng2-breadcrumb/ng2-breadcrumb';

import { AppComponent } from './app.component';
import { AboutComponent } from './about/about.component';
import { HomeComponent } from './home/home.component';
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';
import { ContactsComponent } from './contacts/contacts.component';

const appRoutes: Routes = [
  { path: 'about',	component: AboutComponent },
  { path: 'contacts',	component: ContactsComponent },
  { path: '',		component: HomeComponent },
  { path: '**',		component: PageNotFoundComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    AboutComponent,
    HomeComponent,
    PageNotFoundComponent,
    ContactsComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    Ng2BreadcrumbModule.forRoot(),
	  RouterModule.forRoot(appRoutes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
