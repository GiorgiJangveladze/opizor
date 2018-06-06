import React, { Component } from 'react';
import {
    Switch,
    Route,
    BrowserRouter,
    Redirect
} from 'react-router-dom';
import ReactDOM from 'react-dom';
import {
    TransitionGroup,
    CSSTransition
} from 'react-transition-group';

//page components
import Home from './components/homeComponent/Home';
import Contact from './components/contactComponent/Contact';
import Closine from './components/closineComponent/Closine';
import About from './components/aboutComponent/About';

import Header from './components/Header';
import Footer from './components/Footer';

//import style
import './style/css/style.css';

export default class Site extends Component {
    render() {
        return (
            <div>
                <Header/>
                <Route render={({location}) => (
                    <TransitionGroup>
                        <CSSTransition
                            key = {location.key}
                            timeout={500}
                            classNames={'fade'}
                            mountOnEnter={false}
                            unmountOnExit={false}
                        >
                            <Switch location={location}>
                                <Route path='/:lang(en|fr|jp)' exact={true} component={Home}/>
                                <Route path='/:lang(en|fr|jp)/contact' exact={true} component={Contact}/>
                                <Route path='/:lang(en|fr|jp)/closine' exact={true} component={Closine}/>
                                <Route path='/:lang(en|fr|jp)/about' exact={true} component={About}/>
                                <Redirect path='*' to='/en'/>
                            </Switch>
                        </CSSTransition>
                    </TransitionGroup>
                )}/>
                <Footer/>
            </div>
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
