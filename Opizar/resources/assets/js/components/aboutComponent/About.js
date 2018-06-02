import React, {Component} from 'react';
import Main from '../mainComponent/Main';

class About extends Component{
    constructor(props){
        super(props)
    }

    render(){
        return(
            <Main>
                <main className="opizari">
                    <article className="about">
                        <h1>OPIZARI</h1>
                        <div className="column">
                            <div className="column-split">
                                <h2>ABOUT</h2>
                                <p>Opizari is a Tbilisi-based studio offering cloisonné enamel jewelry. Founded in 2016, our studio remains small, focusing on exclusive pieces.</p><br/>

                                <p>The brand is using materials of superior quality from the most reputable manufacturers across the globe, which ensures excellent quality and credibility of Opizari products.</p>
                            </div>

                            <div className="column-split">
                                <h2>CRAFTSMENSHIP</h2>
                                <p>With earnest dedication to the rich traditions of enameling art, Opizari recognizes that cloisonné enamel jewelry represents centuries of experience and unique mastery honed by committed artisans.</p><br/>

                                <p>Opizari continues to follow these vital skills, drawing on the heritage and on the team of experienced enamelers specializing in cloisonne</p>
                            </div>

                            <div className="column-split">
                                <p>and other enameled techniques, to achieve higher levels of perfection, to highlight and perpetuate the refinement and finesse of this rare art form.</p><br/>

                                <p>Deep knowledge of craftsmanship, so meaningful to Opizari releases its creativity, giving expression to its daring style. Craftsmanship and individuality turn Opizari jewelry into divergent works of art.</p>
                            </div>
                        </div>
                        <div className="opizari-img">
                            <img src="img/opizari.jpg" alt=""/>
                        </div>
                    </article>
                </main>
            </Main>
        );
    }
}

export default About;