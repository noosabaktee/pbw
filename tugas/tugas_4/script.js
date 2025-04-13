function cekNilai() {
    let nim = document.getElementById("nim").value.trim();
    let nilai = parseInt(document.getElementById("nilai").value);
    let output = document.getElementById("output");

    if (nim === "" || isNaN(nilai)) {
        output.innerHTML = "NIM dan nilai harus diisi!";
        return;
    }

    if (nilai < 0 || nilai > 100) {
        output.innerHTML = "Nilai tidak valid!";
        return;
    }

    let hurufMutu;
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    output.innerHTML = `NIM: ${nim} <br> Nilai: ${nilai} <br> Huruf Mutu: <strong>${hurufMutu}</strong>`;
}