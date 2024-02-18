export const StarComponent = ({ dataStars ,no_label}) => {
    const renderStars = () => {
        const stars = [];
        const numStars = parseInt(dataStars, 10);

        for (let i = 1; i <= 5; i++) {
            const starClass = i <= numStars ? "fa-solid fa-star" : "fa-regular fa-star";
            stars.push(<i key={i} className={`fa ${starClass} tw-mx-0.5`}></i>);
        }

        return stars;
    };

    return <div className="star-container tw-text-yellow-500 tw-text-sm">{renderStars()} {no_label ? <span className="tw-text-xs">{dataStars}</span> : null}</div>;
};