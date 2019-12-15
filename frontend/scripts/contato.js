class Contato{
    constructor(nome, telefone, lon, lat, coduser){
        this.cod;
        this.nome = nome;
        this.telefone = telefone;
        this.lon = lon;
        this.lat = lat;
        this.coduser = coduser;
    }
    getCod(){
        return this.cod;
    }
    setCod(value){
        this.cod = value;
    }
    getNome() {
        return this.nome;
    }
    setNome(value){
        this.nome = value;
    }
    getTelefone() {
        return this.telefone;
    }
    setTelefone(value){
        this.telefone = value;
    }
    getLon() {
        return this.lon;
    }
    setLon(value){
        this.lon = value;
    }
    getLat() {
        return this.lat;
    }
    setLat(value){
        this.lat = value;
    }
    getCodUser() {
        return this.coduser;
    }
    setCodUser(value){
        this.coduser = value;
    }
}