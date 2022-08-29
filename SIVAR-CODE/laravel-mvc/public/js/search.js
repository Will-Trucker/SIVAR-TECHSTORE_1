import {search} from "./export_search.js";
const mysearchp = document.querySelector("#mysearch");
const ul_add_lip = document.querySelector("#showlist");
const myurlp ="/myurl";
const searchproduct = new search(myurlp,mysearchp,ul_add_lip);
searchproduct.InputSearch();
