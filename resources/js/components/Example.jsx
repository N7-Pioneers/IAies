// resources/js/components/App.jsx
import React, { useReducer } from 'react';
import Slide from './Slide.jsx';

const slides = [
  // ... (votre tableau de diapositives ici)
];

const initialState = {
  slideIndex: 0,
};

const slidesReducer = (state, event) => {
  switch (event.type) {
    case 'NEXT':
      return {
        ...state,
        slideIndex: (state.slideIndex + 1) % slides.length,
      };
    case 'PREV':
      return {
        ...state,
        slideIndex:
          state.slideIndex === 0 ? slides.length - 1 : state.slideIndex - 1,
      };
    default:
      return state;
  }
};

function Example() {
  const [state, dispatch] = useReducer(slidesReducer, initialState);

  return (
    <div className="slides">
      <button onClick={() => dispatch({ type: 'PREV' })}>‹</button>

      {slides.map((slide, i) => {
        const offset = slides.length + (state.slideIndex - i);
        return <Slide slide={slide} offset={offset} key={i} />;
      })}
      <button onClick={() => dispatch({ type: 'NEXT' })}>›</button>
    </div>
  );
}

export default Example;
