import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Footer from './footer';

export default class Example extends Component {
    constructor(props){
        super(props);
        console.log("react example component, props :" + JSON.stringify(props));
    }
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Example Component</div>

                            <div className="card-body">
                                I'm an example component!
                            </div>
                            < Footer/>  
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    var data = document.getElementById('example').getAttribute('data');
    ReactDOM.render(<Example data={data} />, document.getElementById('example'));
}
