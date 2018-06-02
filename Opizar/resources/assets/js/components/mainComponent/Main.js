import React, {Component} from 'react';
import Header from '../Header';
import Footer from '../Footer';

class Main extends Component{
    constructor(props){
        super(props)
    }

    render(){
        return(
            <div>
                <Header/>
                    {this.props.children}
                <Footer/>
            </div>
        );
    }
}

export default Main;