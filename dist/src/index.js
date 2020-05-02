import React from 'react';
import ReactDOM from 'react-dom';
import FontFaceObserver from 'fontfaceobserver';
import SideBar from './components/SideBar';
import ThumbContainer from './components/ThumbContainer';

// Observe loading of Lato
const openSansObserver = new FontFaceObserver('Lato', {});

// When Lato is loaded, add a font-family using Lato to the body
openSansObserver.load().then(() => {
  document.body.classList.add(styles.fontLoaded);
}, () => {
  document.body.classList.remove(styles.fontLoaded);
});



function NumetricLabs() {
  return (
    <div className="wrapper">
      <SideBar />
      <ThumbContainer />
    </div>
  );
}

ReactDOM.render(<NumetricLabs />, document.querySelector('#app'));
