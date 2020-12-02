function matrixElementsSum (matrix) {
    var universal       = 0;
    var mtxString       = [];
    var separator       = [];
    for (var x=0; x < matrix.length; x++) {
        mtxString = mtxString.concat(matrix[x]);
    }
    for (var x=0; x < mtxString.length; x++) {
        if (mtxString[x] == 0) {
            universal   = 1;
            break
        }else if (x == mtxString.length-1) { universal = 0; }
    }
    if (universal) {
    var arrayLinhaZero   = [];
    var arrayColunZero   = [];
    var abaixoZero       = [];
    var todoMatrix       = [];
    if (matrix[0][0] != 0) {
        todoMatrix.push(matrix[0][0] + "/" + 0 + ":" + 0);
    }
    for (var x = 0; x < matrix.length; x++) {
        for (var y=0; y < matrix[0].length; y++) {
            if (matrix[x][y] != 0) {
                todoMatrix.push(matrix[x][y] + "/" + x + ":" + y);
                for (var xLinha=0; xLinha < arrayLinhaZero.length; xLinha++) {
                    for (var yLinha=0; yLinha < arrayColunZero.length; yLinha++) {
                        if ((x >= arrayLinhaZero[xLinha]) && (y == arrayColunZero[yLinha])) {
                            abaixoZero.push(matrix[x][y] + "/" + x + ":" + y);
                        }   
                    }
                }
            }else { arrayLinhaZero.push(x); arrayColunZero.push(y); }
        }
    }
    abaixoZero = abaixoZero.filter((elem, index, arr)   => index === arr.indexOf(elem));
    todoMatrix = todoMatrix.filter((elem, index, arr)   => index === arr.indexOf(elem));
    // console.log(todoMatrix)
    if (abaixoZero.length != 0) {
        for (var x=0; x < todoMatrix.length; x++) {
            for (var y=0; y < abaixoZero.length; y++) {
                if (todoMatrix[x] != abaixoZero[y] ) {
                    if (y == abaixoZero.length-1) {
                        separator.push(todoMatrix[x]);
                    }
                }else if (todoMatrix[x] == abaixoZero[y]) {
                    break
                }
            }
        }
    }else { separator = todoMatrix; }

    // console.log(separator)
    }else {
        for (var x=0; x < matrix.length; x++) {
            separator = separator.concat(matrix[x]);
        }
        var st          = [];
        for (var x=0; x < separator.length; x++) {
            st.push(separator[x].toString()); // converte e joga, conv. e joga ....
        }
        separator = st;
    }
    var finaleSeparator = [];
    var soma            = 0;
    for (var x=0; x < separator.length; x++) {
        if (separator[x].indexOf("/") != -1) {
            finaleSeparator.push(separator[x].substr(0, separator[x].indexOf("/")));
        }else { finaleSeparator = separator } // quer dizer que os elem. não tem zeros em suas estruturas
        if (x == separator.length-1) {
            for (var y=0; y < finaleSeparator.length; y++) {
                soma += parseInt(finaleSeparator[y]); // somando os valores
            }
        }
    }
    return soma;
    // console.log(soma)
}

var matrix = [
    [2,4,10000000]];
console.log(matrixElementsSum (matrix)); // some apenas os elementos que não estão abaixo do zero