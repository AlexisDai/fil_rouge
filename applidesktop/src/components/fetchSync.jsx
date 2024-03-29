async function fetchSync (uri, method, body = null) {
    try {
        const response = await fetch(uri, {
            method: method,
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: body ? JSON.stringify(body) : null
        });
    
        const data = await response.json();
        return data;
    } catch (error) {
        return new Error('error fetching data', error)
    }
   
}


export {fetchSync};