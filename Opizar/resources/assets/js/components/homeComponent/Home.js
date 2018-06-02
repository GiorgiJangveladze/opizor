import React, {Component} from 'react';
import Main from '../mainComponent/Main';

class Home extends Component{
    constructor(props){
        super(props)
    }

    render(){
        return(
            <Main>
                <main className="home">
                    <div className="img-container">
                        <img src="img/home.png" alt=""/>
                    </div>
                </main>
            </Main>
        );
    }
}

export default Home;