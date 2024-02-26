import { useState } from 'preact/hooks';

export const StarComponent = ({ dataStars, no_label, rateable }) => {
    const [hoveredStars, setHoveredStars] = useState(0);
    const numStars = parseInt(dataStars, 10);

    const handleStarHover = (starIndex) => {
        if (rateable) {
            setHoveredStars(starIndex);
        }
    };

    const handleStarLeave = () => {
        if (rateable) {
            setHoveredStars(0);
        }
    };

    const handleStarClick = (starIndex) => {
        if (rateable) {
            // Handle star click event here
        }
    };

    const renderStars = () => {
        const stars = [];

        for (let i = 1; i <= 5; i++) {
            const starClass = i <= (rateable ? hoveredStars : numStars) ? "fa-solid fa-star" : "fa-regular fa-star";
            stars.push(
                <i
                    key={i}
                    className={`fa ${starClass} tw-mx-0.5`}
                    onMouseEnter={() => handleStarHover(i)}
                    onMouseLeave={handleStarLeave}
                    onClick={() => handleStarClick(i)}
                ></i>
            );
        }

        return stars;
    };

    return (
        <div className="star-container tw-text-yellow-500 tw-text-sm">
            {renderStars()} {no_label ? <span className="tw-text-xs">{dataStars}</span> : null}
            {rateable ? <input type="hidden" name="rate" value={hoveredStars} /> : null}
        </div>
    );
};