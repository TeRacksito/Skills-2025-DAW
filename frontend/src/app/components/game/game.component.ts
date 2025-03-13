import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { ParallaxComponent } from '../parallax/parallax.component';

@Component({
  selector: 'app-game',
  standalone: true,
  imports: [CommonModule, ParallaxComponent],
  templateUrl: './game.component.html',
  styleUrl: './game.component.css'
})
export class GameComponent {
  images: string[];

  constructor() {
    this.images = [
      '_11_background.png',
      '_10_distant_clouds.png',
      '_09_distant_clouds1.png',
      '_08_clouds.png',
      '_07_huge_clouds.png',
      '_06_hill2.png',
      '_05_hill1.png',
      '_04_bushes.png',
      '_03_distant_trees.png',
      '_02_trees.png',
      '_01_ground.png'
    ];


  }

}