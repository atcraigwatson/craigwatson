// Styles
import "../css/style.scss";

// Scripts
import React, { Component } from "react";
import { createRoot } from "react-dom/client";

import WordPressSearch from "./WordPressSearch.tsx";
import QuoteCard from "./QuoteCard.tsx";

const searchDomNode = document.getElementById("react-search");
const searchRoot = createRoot(searchDomNode);
searchRoot.render(<WordPressSearch />);

const quoteDomNode = document.getElementById("react-quote-card");
const quoteRoot = createRoot(quoteDomNode);
quoteRoot.render(<QuoteCard />);
