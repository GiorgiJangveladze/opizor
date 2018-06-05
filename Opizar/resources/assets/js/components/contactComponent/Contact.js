import React, {Component} from 'react';

class Contact extends Component{
    constructor(props){
        super(props)
    }

    render(){
        return(
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
        );
    }
}

export default Contact;