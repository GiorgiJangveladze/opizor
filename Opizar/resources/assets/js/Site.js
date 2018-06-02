import React, { Component } from 'react';
import {Switch, Route, BrowserRouter} from 'react-router-dom';
import ReactDOM from 'react-dom';

//page components
import Home from './components/homeComponent/Home';
import Contact from './components/contactComponent/Contact';
import Closine from './components/closineComponent/Closine';
import About from './components/aboutComponent/About';

//import style
import './style/css/style.css';

export default class Site extends Component {
    render() {
        return (
            <Switch>
                <Route path='/en' exact component={Home}/>
                <Route path='/en/contact' component={Contact}/>
                <Route path='/en/closine' component={Closine}/>
                <Route path='/en/about' component={About}/>
            </Switch>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(
        <BrowserRouter>
            <Site />
        </BrowserRouter>,
        document.getElementById('example')
    );
}
