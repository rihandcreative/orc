var getParams = {}
location.search.substr(1).split("&").forEach(function(item) {getParams[item.split("=")[0]] = item.split("=")[1]})
if(getParams.uid !== undefined) {
    document.getElementById('link1').setAttribute('href', './preorder1-hebat?uid=' + getParams.uid);
    document.getElementById('link2').setAttribute('href', './preorder2-juara?uid=' + getParams.uid);
    document.getElementById('link3').setAttribute('href', './preorder3-prestasi?uid=' + getParams.uid);
    console.log(getParams.uid);
}