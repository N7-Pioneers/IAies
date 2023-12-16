import React, { useEffect, useRef } from 'react';

function useTilt(active) {
  const tiltRef = useRef(null);

  useEffect(() => {
    if (active && tiltRef.current) {
      
    }
  }, [active]);

  return tiltRef;
}

function Slide({ slide, offset }) {
  const active = offset === 0 ? true : null;
  const tiltRef = useTilt(active);

  return (
    <div
      ref={tiltRef}
      className="slide"
      data-active={active}
      style={{
        '--offset': offset,
        '--dir': offset === 0 ? 0 : offset > 0 ? 1 : -1,
      }}
    >
      <div
        className="slideBackground"
        style={{
          backgroundImage: url('${slide.image}'),
        }}
      />
      <div
        className="slideContent"
        style={{
          backgroundImage: url('${slide.image}'),
        }}
      >
        <div className="slideContentInner">
          <h2 className="slideTitle">{slide.title}</h2>
          <h3 className="slideSubtitle">{slide.subtitle}</h3>
          <p className="slideDescription">{slide.description}</p>
        </div>
      </div>
    </div>
  );
}

export default Slide;