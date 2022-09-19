<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<script type="module">


  import {h, render} from 'https://unpkg.com/preact@latest?module';
  import {useState, useEffect} from 'https://unpkg.com/preact@latest/hooks/dist/hooks.module.js?module';
  import htm from 'https://unpkg.com/htm?module';
  const html = htm.bind(h);


  const Com = (props) => {
    const [isLoading, setLoading] = useState(true);
    const [data, setData] = useState([]);
    const getBooks = async () => {
      try {
        const response = await fetch('/api/v1/book');
        const json = await response.json();
        setData(json);
      } catch (error) {
        console.error(error);
      } finally {
        setLoading(false);
      }
    }
    useEffect(() => {
      getBooks();
    }, []);

    if (isLoading)
      return html`Loading`
    else
      return html`
      <div>
      <a href="/api/v1/author">JSON</a>
        <ul>
          ${data.map(author => html`
            <li key="${author.id}">${author.title}+${author.author}</li>
          `)}
        </ul>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous' />
      </div>`
  }

  // const App = (props) => {
  //   return html`<h1>Hello ${props.name}!</h1>`;
  // }

  render(html`<${Com} name="World" />`, document.body);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>