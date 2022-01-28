// let url = window.location.href;
// let filename = url.split('/').pop();
// console.log(filename);



export default async function getproduits(idcat) {

    const params = {
        idCat: idcat
    };
    const options = {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",  // sent request
            "Accept": "application/json"   // expected data sent back
        },
        body: JSON.stringify(params)
    };
    const response = await fetch("data.php", options);
    const dataJson = await response.json();

    console.log(dataJson);
    return dataJson;
}