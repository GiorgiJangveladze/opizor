import React, {Component} from 'react';
import Main from '../mainComponent/Main';

class Contact extends Component{
    constructor(props){
        super(props)
    }

    render(){
        return(
            <Main>
                <main className="opizari">
                    <div className="contact">
                        <h1>OPIZARI LLC</h1>
                        <address>
                            <span>22-24 Krtsanisi Street ,block B,  apt 25,  4th floor</span>
                            <span>Tbilisi 0114,  Georgia</span>
                            <span className="phone">Tel: +995 322 903553</span>
                            <span>contact@opizari.com</span>
                        </address>
                    </div>
                </main>
            </Main>
        );
    }
}

export default Contact;