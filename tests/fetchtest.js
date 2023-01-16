const chai = require('chai');
const chaiHttp = require('chai-http');
const expect = chai.expect;

chai.use(chaiHttp);

describe('fetchData', () => {
    it('should fetch data and display it in a table', (done) => {
        chai.request('http://sample-test-app.opendata.org.ph/')
            .get('/src/MyDataController.php/?action=fetchData')
            .end((err, res) => {
                console.log(res)
                expect(err).to.be.null;
                expect(res).to.have.status(200);
                expect(res.body).to.be.an('object');
                // Do additional tests on the data here if necessary
             
                done();
            });
    });
});

// mocha.run();