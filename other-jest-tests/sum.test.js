const sum = require('./sum')

describe("example tests", () =>{
  test('should add 1 + 2 to equal 3', () => {
    const result = sum(1,2);
    expect(result).toBe(3)
    
  })

  test('object assignment', () => {
    const obj = {};
    expect(obj).toEqual({})
    
  })
})
