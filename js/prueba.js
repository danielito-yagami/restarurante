document.querySelector("#contenido > div.row.justify-content-end > div:nth-child(3) > div > button").click()
let ente = ""
let comentarioEnte = ""




if (document.querySelector("#collapse0 > div > div:nth-child(4) > div:nth-child(2) > div.col-12.col-lg-8.mb-0 > p.text-sm.mt-1")) {
    comentarioEnte = document.querySelector("#collapse0 > div > div:nth-child(4) > div:nth-child(2) > div.col-12.col-lg-8.mb-0 > p.text-sm.mt-1").textContent
    ente = document.querySelector("#collapse0 > div > div:nth-child(4) > div:nth-child(2) > div.col-12.col-lg-4 > p.text-sm.font-weight-bold").textContent
} else {
    if (document.querySelector("#collapse0 > div > div:nth-child(3) > div:nth-child(2) > div.col-12.col-lg-8.mb-0 > p.text-sm.mt-1")) {
        comentarioEnte = document.querySelector("#collapse0 > div > div:nth-child(3) > div:nth-child(2) > div.col-12.col-lg-8.mb-0 > p.text-sm.mt-1").textContent
        ente = document.querySelector("#collapse0 > div > div:nth-child(3) > div:nth-child(2) > div.col-12.col-lg-4 > p.text-sm.font-weight-bold").textContent
    }

}
document.querySelector("#reason-text-7").value = "Estimado(a) Ciudadano(a): al respecto de su solicitud en el Sistema Unificado de Atención Ciudadana, se hace de su conocimiento la respuesta proporcionada por " + ente + ". Gracias: " + comentarioEnte
//document.querySelector("#cancelModal > div > div > div > div.d-flex.justify-content-center > button:nth-child(1)").click();