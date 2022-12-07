import { useState, useEffect } from 'react'
import reactLogo from './assets/react.svg'
import './App.css'

function App() {
  const [count, setCount] = useState(0)
  const [data, setData] = useState(null);

  useEffect(() => {
    fetch('http://localhost:1234/hello-wastapp')
      .then((res) => res.text())
      .then((data) => {
        setData(data);
      })
  }, [data])

  return (
    <div className="App">
      <div>
        <a href="https://reactjs.org" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
      </div>
      <h1>{data}</h1>
    </div>
  )
}

export default App
