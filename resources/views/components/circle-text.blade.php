@props(['text'])

<div class="circle-text">
  <svg viewBox="0 0 100 100" width="100" height="100">
    <defs>
      <path id="circle"
            d="
        M 50, 50
        m -37, 0
        a 37,37 0 1,1 74,0
        a 37,37 0 1,1 -74,0"/>
    </defs>
    <text font-size="17">
      <textPath xlink:href="#circle">
        You spin me right round, baby...
      </textPath>
    </text>
  </svg>
</div>