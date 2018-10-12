// https://www.npmjs.com/package/decouple
                (function(e){if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=e()}else if(typeof define==="function"&&define.amd){define([],e)}else{var n;if(typeof window!=="undefined"){n=window}else if(typeof global!=="undefined"){n=global}else if(typeof self!=="undefined"){n=self}else{n=this}n.decouple=e()}})(function(){var e,n,t;return function i(e,n,t){function r(f,u){if(!n[f]){if(!e[f]){var d=typeof require=="function"&&require;if(!u&&d)return d(f,!0);if(o)return o(f,!0);var a=new Error("Cannot find module '"+f+"'");throw a.code="MODULE_NOT_FOUND",a}var s=n[f]={exports:{}};e[f][0].call(s.exports,function(n){var t=e[f][1][n];return r(t?t:n)},s,s.exports,i,e,n,t)}return n[f].exports}var o=typeof require=="function"&&require;for(var f=0;f<t.length;f++)r(t[f]);return r}({1:[function(e,n,t){"use strict";var i=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}().bind(window);function r(e,n,t){var r,o=false;function f(e){r=e;u()}function u(){if(!o){i(d);o=true}}function d(){t.call(e,r);o=false}e.addEventListener(n,f,false);return f}n.exports=r},{}]},{},[1])(1)});

                (function() {
                    var sectionToggles = document.querySelectorAll('.myml-nav__menu .myml-nav__section-icon');
                    var menuToggleChk = document.querySelector('#myml-menu-toggle');
                    var header = document.querySelector('.nav-header');
                    var appWrapper = document.querySelector('.app-wrapper');
                    var menuWrapper = document.querySelector('.menu-wrapper');
                    var navContainer = document.querySelector('.myml-nav__container');
                    var openByDefault = (document.querySelector('.app-wrapper--menu-expanded')) ? true : false;
                    var toggleClassName = 'app-wrapper--menu-expanded';
                    var inputMenuToggle = document.getElementById('myml-menu-toggle');

                    var brakepoints = {
                    small: '1024',
                    large: '1860'
                    };

                    function fixMenuOnScroll() {
                    var scrollY = window.pageYOffset;
                    var wrapperTop = document.querySelector('.app-wrapper').offsetTop;

                    if (!scrollY) {
                        var d = document, r = d.documentElement, b = d.body;
                        scrollY = r.scrollTop || b.scrollTop || 0;
                    }
                    
                    if (scrollY < wrapperTop) {
                        navContainer.classList.remove('myml-nav__container--active');
                    } else {
                        navContainer.classList.add('myml-nav__container--active');
                    };
                    }

                    function showMenu(){
                    appWrapper.classList.add(toggleClassName);
                    inputMenuToggle.checked = true;
                    inputMenuToggle.disabled = true;
                    }

                    function hideMenu(){
                    appWrapper.classList.remove(toggleClassName);
                    inputMenuToggle.checked = false;
                    inputMenuToggle.disabled = false;
                    }

                    function responsiveMenu() {
                    if (openByDefault) {
                        (window.innerWidth > brakepoints.small) ? showMenu() : hideMenu();
                    } else {
                        (window.innerWidth > brakepoints.large) ? showMenu() : hideMenu();
                    }
                    }

                    !openByDefault && decouple(window, 'scroll', fixMenuOnScroll.bind(this));
                    !openByDefault && fixMenuOnScroll();
                    decouple(window, 'resize', responsiveMenu.bind(this));
                    responsiveMenu();

                    [].forEach.call(sectionToggles, function(toggle) {
                    toggle.addEventListener('click', function(e) {
                        var htmlFore = toggle.nextElementSibling.getAttribute('for');
                        var chk = document.querySelector('#' + htmlFore);
                        
                        if (chk) {
                            if (!menuToggleChk.checked) {
                                chk.checked = true;
                            } else {
                                e.preventDefault();
                                chk.checked = !chk.checked;
                            }
                        }
                    });
                    });

                    var tooltipBaseClass = 'myml-nav__menu-tooltip';
                    [].forEach.call(sectionToggles, function(tooltipEl) {
                    var tTimer;
                    tooltipEl.addEventListener('mouseenter', function(e) {
                        if (menuToggleChk.checked) {
                        return;
                        }

                        var trg = e.target;
                        var tooltip = trg.tooltip;
                        if (!tooltip) {
                        var tooltip = document.createElement('div');
                        tooltip.className = tooltipBaseClass;
                        tooltip.innerHTML = trg.getAttribute('data-tooltip');
                        menuWrapper.appendChild(tooltip);
                        trg.tooltip = tooltip;
                        }

                        tTimer = setTimeout(function() {
                        var triggerCoords = e.target.getBoundingClientRect();
                        var left = triggerCoords.right + 2;
                        var top = (parseInt(triggerCoords.top, 10) + parseInt(triggerCoords.bottom, 10)) / 2 - tooltip.offsetHeight / 2;

                        tooltip.style.left = left + 'px';
                        tooltip.style.top = (top + window.scrollY) + 'px';

                        tooltip.classList.add(tooltipBaseClass + '--open');
                        }, 200);
                    });

                    tooltipEl.addEventListener('mouseleave', function(e) {
                        clearTimeout(tTimer);
                        if (e.target.tooltip) {
                        e.target.tooltip.classList.remove(tooltipBaseClass + '--open');
                        setTimeout(function() {
                            if (e.target.tooltip) {
                            menuWrapper.removeChild(e.target.tooltip);
                            e.target.tooltip = null;
                            }
                        }, 200);
                        }
                    });
                    });
                })();