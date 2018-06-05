import React, {Component} from 'react';

class Closine extends Component{
    constructor(props){
        super(props)
    }

    render(){
        return(
            <main className="opizari">
                <article className="concept">
                    <h1>CLOISONNÉ ENAMEL</h1>
                    <div className="column">
                        <p>This is one of the most intricate and unique types of Enamel Art.<br/>
                            Initially, enamel comes in the form of glassy plates.  The enameller crushes and grinds them into a fine powder in a ceramic mortar. The powder is then wetted with water to the desired consistency and mixed in a creamy paste.<br/>
                            Only then, the enamel is applied on the metal surface with a special tool. The surface is covered with thin metal partitions (they can be gold or silver). The spaces between the partitions are filled with wet enamel powder. The piece, ready with partitions and enamel fillings, is left to dry completely before sending it to the kiln for firing. The uneven areas are refilled and fired again. This process can be repeated several times until the enamel levels with the partitions. Different types and colors of enamel have different firing temperatures, which range from 750 to 900 degrees (°C). During the firing process, the powder melts into a colored vitreous layer, and, depending on the type of enamel, becomes transparent or opaque (a colored, opaque layer of enamel). After it is cooled down, the article is polished and re-sent to the kiln to ensure perfectly smooth surface.<br/>
                            Based on the peculiarities of the composition and the artisan’s tasks, the work can be fired from 5 to 10, or even more times. The difficulty lays in the fact that the artisan cannot interfere with the process, only being able to adjust the timing and temperature of firing based on experience and intuition. However, this is exactly why each work of enamel is unique – even the author cannot duplicate the work with an absolute precision. The creation process of one piece requires around 30 hours of work on average.</p>
                    </div>
                    <div className="opizari-img">
                        <img src="img/opizari.jpg" alt=""/>
                    </div>
                </article>
            </main>
        );
    }
}

export default Closine;