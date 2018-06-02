import React, {Component} from 'react';
import {Link} from 'react-router-dom';
class Header extends Component{
    constructor(props){
        super(props)
    }
    
    render(){
        return(
            <header>
                <div className="logo">
                    <Link to="/en"><img src="svg/logo.svg" alt="opizari"/></Link>
                </div>
                <nav>
                    <ul>
                        <li><Link to="/en/closine">CLOISONNÉ ENAMEL</Link></li>
                        <li><Link to="/en/about">OPIZARI</Link></li>
                        <li><a href="https://www.instagram.com/?hl=en" target="_blank">INSTAGRAM</a></li>
                        <li><Link to="/en/contact">CONTACT</Link></li>
                    </ul>
                </nav>
            </header>
        );
    }
}

export default Header;