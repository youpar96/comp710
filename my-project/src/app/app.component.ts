import { Component } from '@angular/core';
import { Http } from '@angular/http';
import { OnInit } from '@angular/core';
import 'rxjs/Rx'; // to use .map

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

// need to add 'implements OnInit' to use ngOnInit()
export class AppComponent implements OnInit {
  constructor(private http: Http) {}
  
  ngOnInit(){
    var res1 = this.http.get(this.RESTUrl1)
            .map(res1 => res1.json())
            .subscribe(results1 => this.results1 = results1);
    
    var res2 = this.http.get(this.RESTUrl2)
            .map(res2 => res2.json())
            .subscribe(results2 => this.results2 = results2);
            
    var res3 = this.http.get(this.RESTUrl3)
            .map(res3 => res3.json())
            .subscribe(results3 => this.results3 = results3);
  }
  
  title = "Kenneth's App";
  name = "Kenneth";
  
  private RESTUrl1 = './assets/example_1.json'; // URL to web api
  private RESTUrl2 = './assets/example_2.json'; // URL to web api
  private RESTUrl3 = './assets/example_3.json'; // URL to web api
  
  results1 = "";
  results2 = "";
  results3 = "";
}
