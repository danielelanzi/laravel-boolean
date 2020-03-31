   <nav class="nav-footer">
        <ul>
            <li>
                {{-- condizione = bool,  vero = ?,  falso = : --}}
            <a class=" {{ (Request::route()->getName() == 'static_page.privacy') ? 'active' : ''}} " href="{{route('static_page.privacy')}}">Privacy</a>
            </li>
            <li>
                    {{-- condizione = bool,  vero = ?,  falso = : --}}
                <a class=" {{ (Request::route()->getName() == 'static_page.faq') ? 'active' : ''}} " href="{{route('static_page.faq')}}">Domande Frequenti</a>
            </li>
        </ul>
    </nav>
  </div>
</body>
</html>