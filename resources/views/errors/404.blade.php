<div class="section">
    <h1 class="error">404</h1>
    <div class="page">Ooops!!! The page you are looking for is not found</div>
    <a class="back-home" href="/">Back to home</a>
  </div>


  <style>
    html, body{
  margin: 0;
  padding: 0;
  text-align: center;
  font-family: sans-serif;
  background-color: #6697dfd0;
}

h1, a{
  margin: 0;
  padding: 0;
  text-decoration: none;
}

.section{
  padding: 4rem 2rem;
}

.section .error{
  font-size: 150px;
  color: #185EC8;
  text-shadow:
    1px 1px 1px #0f3e84,
    2px 2px 1px #0f3e84,
    3px 3px 1px #0f3e84,
    4px 4px 1px #0f3e84,
    5px 5px 1px #0f3e84,
    6px 6px 1px #0f3e84,
    7px 7px 1px #0f3e84,
    8px 8px 1px #0f3e84,
    25px 25px 8px rgba(0,0,0, 0.2);
}

.page{
  margin: 2rem 0;
  font-size: 20px;
  font-weight: 600;
  color: #f4f2f2;
}

.back-home{
  display: inline-block;
  border: 2px solid #222;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  padding: 0.75rem 1rem 0.6rem;
  transition: all 0.2s linear;
  box-shadow: 0 15px 15px -11px rgba(0,0,0, 0.4);
  background: #222;
  border-radius: 6px;
}
.back-home:hover{
  background: #222;
  color: #ddd;
}
  </style>


<script>
    const textElement = document.querySelector('.error');

window.addEventListener('mousemove', (event) => {
  // Calculate relative cursor position within the text element's bounding box
  const boundingRect = textElement.getBoundingClientRect();
  const relativeX = event.clientX - boundingRect.left;
  const relativeY = event.clientY - boundingRect.top;

  // Calculate normalized cursor position (0-1)
  const normalizedX = relativeX / boundingRect.width;
  const normalizedY = relativeY / boundingRect.height;

  // Adjust shadow offset based on normalized position
  const shadowOffsetX = (normalizedX - 0.5) * 25; // Range: -25 to 25
  const shadowOffsetY = (normalizedY - 0.5) * 25; // Range: -25 to 25

  // Update text shadow style with calculated offsets
  textElement.style.textShadow = `
    1px 1px 1px #0f3e84,
    2px 2px 1px #0f3e84,
    3px 3px 1px #0f3e84,
    4px 4px 1px #0f3e84,
    5px 5px 1px #0f3e84,
    6px 6px 1px #0f3e84,
    7px 7px 1px #0f3e84,
    8px 8px 1px #0f3e84,
    ${shadowOffsetX}px ${shadowOffsetY}px 1px #0f3e84
  `;
});


window.addEventListener("mouseleave", function(){
    textElement.style.textShadow = `
    1px 1px 1px #00593E,
    2px 2px 1px #00593E,
    3px 3px 1px #00593E,
    4px 4px 1px #00593E,
    5px 5px 1px #00593E,
    6px 6px 1px #00593E,
    7px 7px 1px #00593E,
    8px 8px 1px #00593E,
    25px 25px 8px rgba(0,0,0, 0.2)
  `;
})
</script>
