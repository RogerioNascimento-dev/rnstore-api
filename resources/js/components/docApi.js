import React from 'react';
import ReactDOM from 'react-dom';
function DocApi() {
    return (
        <h1>Documentation API</h1>
    );
}
export default DocApi;

if (document.getElementById('root')) {
    ReactDOM.render(<DocApi />, document.getElementById('root'));
}
