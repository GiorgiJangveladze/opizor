import React, {Component} from 'react';

class Home extends Component{
    constructor(props){
        super(props)
    }

    render(){
        return(
            <main className="home">
                <div className="img-container">
                    <img src="img/home.png" alt=""/>
                </div>
            </main>
        );
    }
}

export default Home;