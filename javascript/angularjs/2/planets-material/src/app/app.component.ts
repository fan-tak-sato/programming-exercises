import { Component, OnInit } from '@angular/core';
import { PlanetsService } from './shared/planets.service';
import { Planets } from './shared/planets';

@Component({
  selector: 'Planets-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  planetsList: Planets[] = [];
  selectedPlanet: Planets;
  constructor(
    private _planetservice: PlanetsService) {}

  ngOnInit() {
    this._planetservice.getPlanets().then(planets => this.planetsList = planets);
    this.selectedPlanet = new Planets();
  }

  showPlanetInfo(selplanet)
  {
    this.selectedPlanet = selplanet;
  }
}