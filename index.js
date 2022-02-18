import React from "react";
import App from "./App";
import ReactDom from 'react-dom';

el = React.createElement(
    "h2",
    null,
    "hey",
    React.createElement(
        "div",
        null,
        "Ya"
    )
);

ReactDom.render(el, document.getElementById('root'));