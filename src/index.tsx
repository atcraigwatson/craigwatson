// Styles
import "../css/style.scss";

// Scripts
import React, { Component } from "react";
import { createRoot } from "react-dom/client";

import WordPressSearch from "./Components.tsx";

const searchDomNode = document.getElementById("react-search");
const searchRoot = createRoot(searchDomNode);
searchRoot.render(<WordPressSearch />);
