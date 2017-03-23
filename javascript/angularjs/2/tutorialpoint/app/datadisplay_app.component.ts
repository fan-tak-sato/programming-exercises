import {Component, View} from "angular2/core";

@Component({
	selector: 'my-app'
})

@View({
	templateUrl: `app/app.data_display.html`
})

export class MyTemplate {
	player: 'M.S. Dhoni ';
	sport:'Cricket';

	capital: string;
	constructor() {
		this.capital = 'New Delhi';
	}

	fruits = ['Apple', 'Orange', 'Mango', 'Grapes'];
	myfruit = this.fruits[1];
}