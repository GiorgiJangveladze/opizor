import React, {Component} from 'react';
import {NavLink} from 'react-router-dom';
class Header extends Component{
    constructor(props){
        super(props)
    }
    
    render(){
        return(
            <header>
                <div className="logo">
                    <NavLink to="/en" exact><img src="svg/logo.svg" alt="opizari"/></NavLink>
                </div>
                <nav>
                    <ul>
                        <li><NavLink to="/en/closine" exact>CLOISONNÉ ENAMEL</NavLink></li>
                        <li><NavLink to="/en/about" exact>OPIZARI</NavLink></li>
                        <li><a href="https://www.instagram.com/?hl=en" target="_blank">INSTAGRAM</a></li>
                        <li><NavLink to="/en/contact" exact>CONTACT</NavLink></li>
                    </ul>
                </nav>
            </header>
        );
    }
}

export default Header;