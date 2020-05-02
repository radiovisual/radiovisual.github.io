import React, { Component } from 'react';

class SideBar extends Component {
  render() {
    return (
      <div id="left-menu">
          <div id="frame">
              <div id="top">
                  <small>WELCOME TO</small>
                  <h1>NUMETRIC<span>LABS</span></h1>
              </div>

              <div id="middle">
                  <small>The Online Portfolio of</small>
                  <h3><span>MICHAEL</span> WUERGLER</h3>
                  <ul>
                      <li>Full-Stack Javascript Developer</li>
                      <li>Interface &amp; Web Designer</li>
                      <li>iOS Developer</li>
                      <li>Dreamer</li>
                  </ul>
              </div>

              <div id="buttons">
                  <ul>
                      <li><i className="fa fa-github-square" aria-hidden="true"></i></li>
                      <li><i className="fa fa-twitter-square" aria-hidden="true"></i></li>
                      <li><i className="fa fa-linkedin-square" aria-hidden="true"></i></li>
                  </ul>
              </div>

          </div>
      </div>
    );
  }
}

export default SideBar;
